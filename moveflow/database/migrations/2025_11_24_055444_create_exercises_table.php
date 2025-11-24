<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workout_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('type')->nullable(); // warmup, strength, cardio, cooldown
            $table->string('duration')->nullable(); // "30 sec", "10 reps"
            $table->text('instructions')->nullable();
            $table->integer('order')->default(1); // exercise order inside workout
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
