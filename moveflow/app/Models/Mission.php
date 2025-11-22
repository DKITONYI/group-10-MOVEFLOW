<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mission extends Model
{
    use HasFactory;
    protected $fillable = ['title','summary','points','workout_id','starts_at','ends_at','is_team_mission'];
    public function workout(){ return $this->belongsTo(Workout::class); }
    public function users(){ return $this->belongsToMany(User::class)->withPivot('status','completed_at')->withTimestamps(); }
}
