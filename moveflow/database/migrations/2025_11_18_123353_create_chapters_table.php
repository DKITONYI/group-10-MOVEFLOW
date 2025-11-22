<?php

// database/migrations/xxxx_create_chapters_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->unsignedInteger('unlock_points')->default(0);
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('chapters'); }
}
