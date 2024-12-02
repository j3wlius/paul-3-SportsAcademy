<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'difficulty_level',
        'capacity',
        'price',
        'duration',
        'requirements',
        'is_active'
    ];

    protected $casts = [
        'requirements' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2'
    ];

    /**
     * Get the schedules for this program.
     */
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    /**
     * Get the registrations for this program.
     */
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
