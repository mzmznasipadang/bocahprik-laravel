<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('watch_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('material_id')->constrained('materials')->onDelete('cascade');
            $table->integer('watched_duration');
            $table->boolean('completed');
            $table->dateTime('last_watched')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('watch_history');
    }
}
