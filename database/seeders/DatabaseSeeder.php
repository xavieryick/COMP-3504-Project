<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(\Database\Seeders\Tables\UsersSeeder::class);
        $this->call(\Database\Seeders\Tables\PasswordResetTokensSeeder::class);
        $this->call(\Database\Seeders\Tables\CacheLocksSeeder::class);
        $this->call(\Database\Seeders\Tables\JobBatchesSeeder::class);
        $this->call(\Database\Seeders\Tables\AlbumsSeeder::class);
        $this->call(\Database\Seeders\Tables\ArtistsSeeder::class);
        $this->call(\Database\Seeders\Tables\TracksSeeder::class);
        $this->call(\Database\Seeders\Tables\PlaylistsSeeder::class);
        $this->call(\Database\Seeders\Tables\PlaylistTrackSeeder::class);
        $this->call(\Database\Seeders\Tables\ArtistTrackSeeder::class);
        $this->call(\Database\Seeders\Tables\AlbumArtistSeeder::class);
    }
}
