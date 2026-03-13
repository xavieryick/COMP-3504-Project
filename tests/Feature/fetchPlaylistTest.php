<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\ApplyFilters;
use Illuminate\Http\Request;
use App\Repositories\SpotifyRepository;
use App\Models\{Playlist, Track, TrackFeatures, Artist, Album};
class fetchPlaylistTest extends TestCase
{
    public function test_playlist_fetch(): void
    {
        $response = $this->get('/dummyPlaylist')->assertStatus(200);
        $playlist = $response->json();
        expect($playlist)->toBeArray();
        expect(count($playlist))->toBeGreaterThan(0);
    }
}
