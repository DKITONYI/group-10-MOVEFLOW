<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workout extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','duration','difficulty','equipment'];
    protected $casts = ['equipment'=>'array'];
    public function missions(){ return $this->hasMany(Mission::class); }
}
