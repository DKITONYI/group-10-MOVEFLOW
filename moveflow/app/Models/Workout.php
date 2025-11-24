<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Mission;
use App\Models\Exercise;
use App\Models\Workout;

class Workout extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','duration','difficulty','equipment'];
    protected $casts = ['equipment'=>'array'];
    public function missions(){ return $this->hasMany(Mission::class); }
    public function exercises()
    {
        return $this->hasMany(Exercise::class)->orderBy('order');
    }

}
