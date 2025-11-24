<?php

// database/migrations/xxxx_create_user_mission_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionUserTable extends Migration
{
    public function up()
    {
    Schema::create('mission_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mission_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->enum('status',['pending','completed'])->default('pending');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('mission_user'); }
}
