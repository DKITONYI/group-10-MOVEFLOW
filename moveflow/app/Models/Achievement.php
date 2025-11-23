<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'unlock_points',
        'missions_required',
    ];

    /**
     * Cast values to proper types.
     */
    protected $casts = [
        'unlock_points' => 'integer',
        'missions_required' => 'integer',
    ];

    /**
     * Relationship:
     * If in the future you want users to earn achievements,
     * you can use a pivot table: achievement_user
     */
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withTimestamps();
    }
}
