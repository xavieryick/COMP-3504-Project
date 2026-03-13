<?php

namespace App\Jobs;

use App\Models\Playlist;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use App\Repositories\SpotifyRepository;
use Illuminate\Support\Facades\Log;
use Throwable;

class GatherPlaylists implements ShouldQueue
{
    use Queueable;

    protected string $accessToken;
    protected SpotifyRepository $spotify;
    public $timeout = 500;

    public function __construct($token){
        $this->spotify = new SpotifyRepository($token);
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try{
            $this->spotify->getSpotifyUserPlaylists();
        } catch (Throwable $e) {
            report($e);
        }
    }
}
