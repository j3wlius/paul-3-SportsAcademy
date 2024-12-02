<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'program_id',
        'schedule_id',
        'payment_status',
        'enrollment_status',
        'payment_amount',
        'payment_date',
        'notes'
    ];

    protected $casts = [
        'payment_date' => 'datetime',
        'payment_amount' => 'decimal:2'
    ];

    /**
     * Get the user that owns the registration.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the program that owns the registration.
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    /**
     * Get the schedule that owns the registration.
     */
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
