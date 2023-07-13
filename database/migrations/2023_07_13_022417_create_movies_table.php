<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster_url');
            $table->text('description');
            $table->string('release_date');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->string('video_url');
            $table->float('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
