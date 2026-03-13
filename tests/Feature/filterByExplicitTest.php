<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\ApplyFilters;


class filterByExplicitTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_playlist_explicit(): void
    {
        $playlist = $this->get('/dummyPlaylist')
        ->assertStatus(200)
        ->json(); //I cannot for the life of me figure out WHY a function called json() does not return a json. 
        // Please, God, wipe this earth clean and replace it with one where Laravel was never invented. The apocalypse is a small price to pay for this freedom.


        $instance = new ApplyFilters();
        $filters = $instance->buildFilter(null, null, null, null, 1);
        
        $filteredPlaylist = $instance->filterSongs($playlist, $filters);
        $response = count($filteredPlaylist);

        expect($response)->toBe(19);
    }
}
