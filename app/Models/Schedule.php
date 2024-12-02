<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'coach_id',
        'start_time',
        'end_time',
        'location',
        'max_participants',
        'current_participants',
        'status'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime'
    ];

    /**
     * Get the program that owns the schedule.
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    /**
     * Get the coach that owns the schedule.
     */
    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id');
    }

    /**
     * Get the registrations for this schedule.
     */
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
