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
        Schema::create('song_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('track_id')->constrained()->onDelete('cascade');

            // Spotify Audio Features
            $table->float('danceability')->nullable();
            $table->float('energy')->nullable();
            $table->float('speechiness')->nullable();
            $table->float('acousticness')->nullable();
            $table->float('instrumentalness')->nullable();
            $table->float('liveness')->nullable();
            $table->float('valence')->nullable();
            $table->float('tempo')->nullable();
            $table->float('loudness')->nullable();
            $table->integer('key')->nullable();
            $table->integer('mode')->nullable();
            $table->integer('time_signature')->nullable();
            $table->integer('duration_ms')->nullable();
            $table->string('analysis_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('track_features');
    }
};
