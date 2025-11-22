<?php

// database/migrations/xxxx_create_workouts_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutsTable extends Migration
{
    public function up()
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedSmallInteger('duration')->default(10); // minutes
            $table->enum('difficulty',['easy','medium','hard'])->default('easy');
            $table->json('equipment')->nullable();
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('workouts'); }
}
