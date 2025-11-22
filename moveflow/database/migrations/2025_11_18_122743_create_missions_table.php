<?php

// database/migrations/xxxx_create_missions_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionsTable extends Migration
{
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('summary')->nullable();
            $table->unsignedInteger('points')->default(10);
            $table->foreignId('workout_id')->nullable()->constrained()->nullOnDelete();
            $table->date('starts_at')->nullable();
            $table->date('ends_at')->nullable();
            $table->boolean('is_team_mission')->default(false);
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('missions'); }
}
