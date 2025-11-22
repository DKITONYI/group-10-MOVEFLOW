<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','unlock_points'];
    public function users(){ return $this->belongsToMany(User::class)->withTimestamps(); }
}
