<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\ApplyFilters;


class filterByArtistTest extends TestCase
{

    public function test_playlist_artist(): void
    {
        $playlist = $this->get('/dummyPlaylist')
        ->assertStatus(200)
        ->json(); 


        $instance = new ApplyFilters();
        $artistFilter = ["Fly By Nightcore"];
        $filters = $instance->buildFilter(null, $artistFilter, null, null, 0);
        
        $filteredPlaylist = $instance->filterSongs($playlist, $filters);
        $response = count($filteredPlaylist);

        expect($response)->toBe(8);
    }
}
