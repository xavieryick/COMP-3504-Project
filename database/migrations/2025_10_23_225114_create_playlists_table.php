<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->string('spotify_id')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('public')->default(true);
            $table->string('owner_name')->nullable();
            $table->string('owner_spotify_id')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamp("synced_at")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('playlists');
    }
};
