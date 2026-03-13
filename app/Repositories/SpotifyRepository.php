<?php

namespace App\Repositories;


use App\Jobs\GatherPlaylists;
use App\Models\{Playlist, Track, TrackFeatures, Artist, Album};
use Attribute;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use emmpaul\LaravelSpotify\Services\SpotifyService;
use Illuminate\Database\Eloquent\Collection;

class SpotifyRepository{
    protected SpotifyService $spotify;
    protected string $accessToken;
    protected $user;
    public function __construct($spotify_token)
    {
        $this->accessToken = $spotify_token;
        $this->spotify = new SpotifyService($spotify_token);

        //TODO This will required error handling
        $this->user = $this->spotify->getCurrentUsersProfile()->json();
    }

     public function insertArtist(string $spotifyArtistId) : Artist{
        $spotifyArtist = $this->spotify->getArtist($spotifyArtistId);
        $artist = Artist::firstOrCreate(
            ["spotify_id" => $spotifyArtistId],
            [
                'name' => $spotifyArtist['name'],
                'image_url' => $spotifyArtist['images'][0]['url'] ?? null,
                'genres' => $spotifyArtist['genres'] ?? [],
                'popularity' => $spotifyArtist['popularity'] ?? null,
            ]
        );
        return $artist;
    }

    public function insertAlbum(array $spotifyAlbum) : Album {
        $album = Album::firstOrCreate(
            ['spotify_id' => $spotifyAlbum['id']],
            [
                'name' => $spotifyAlbum['name'],
                'release_date' => $spotifyAlbum['release_date'] ?? null,
                'album_type' => $spotifyAlbum['album_type'] ?? null,
                'total_tracks' => $spotifyAlbum['total_tracks'] ?? null,
                'image_url' => $spotifyAlbum['images'][0]['url'] ?? null,
            ]
        );
        foreach ($spotifyAlbum["artists"] as $spotifyArtist) {
            $artist = $this->insertArtist($spotifyArtist["id"]);
            $album->artists()->syncWithoutDetaching($artist->id);
        }
        return $album;
    }

    public function insertTrack(array $spotifyTrack) : Track {
        $album = $this->insertAlbum($spotifyTrack['album']);
        $track = Track::firstOrCreate(
            ['spotify_id' => $spotifyTrack['id']],
            [
                'name' => $spotifyTrack['name'],
                'album_id' => $album->id,
                'duration_ms' => $spotifyTrack['duration_ms'],
                'explicit' => $spotifyTrack['explicit'],
                'popularity' => $spotifyTrack['popularity'] ?? null,
                'track_number' => $spotifyTrack['track_number'] ?? null,
                'preview_url' => $spotifyTrack['preview_url'] ?? null,
                'external_url' => $spotifyTrack['external_urls']['spotify'] ?? null,
            ]
        );
        foreach ($spotifyTrack["artists"] as $spotifyArtist) {
            $artist = $this->insertArtist($spotifyArtist["id"]);
            $track->artists()->syncWithoutDetaching($artist->id);
        }
        return $track;
    }

    public function insertTrackById(string $spotifyTrackId) : Track {
        $spotifyTrack = $this->spotify->getTrack($spotifyTrackId)->json();
        return $this->insertTrack($spotifyTrack);
    }

    public function insertTrackFeatures(string $spotifyTrackId) : TrackFeatures {
        $track = insertTrackById($spotifyTrackId);
        //TODO Fix this section, as this code is not finished or tested
        $spotifyFeatures = $this->spotify->makeRequest('get', '/albums/'.$spotifyTrackId)->json();

        $features = $spotifyFeatures::firstOrCreate(
            ['track_id' => $track->id],
            [
                'danceability' => $spotifyFeatures['danceability'] ?? null,
                'energy' => $spotifyFeatures['energy'] ?? null,
                'speechiness' => $spotifyFeatures['speechiness'] ?? null,
                'acousticness' => $spotifyFeatures['acousticness'] ?? null,
                'instrumentalness' => $spotifyFeatures['instrumentalness'] ?? null,
                'liveness' => $spotifyFeatures['liveness'] ?? null,
                'valence' => $spotifyFeatures['valence'] ?? null,
                'tempo' => $spotifyFeatures['tempo'] ?? null,
                'loudness' => $spotifyFeatures['loudness'] ?? null,
                'key' => $spotifyFeatures['key'] ?? null,
                'mode' => $spotifyFeatures['mode'] ?? null,
                'time_signature' => $spotifyFeatures['time_signature'] ?? null,
                'duration_ms' => $spotifyFeatures['duration_ms'] ?? null,
                'analysis_url' => $spotifyFeatures['analysis_url'] ?? null,
            ]
        );
        return $features;
    }

    public function insertPlaylist($spotifyPlaylist, int $limit = 20) : Playlist {
        $saved_playlist = Playlist::where('spotify_id', $spotifyPlaylist["id"])
            ->with('tracks')
            ->withCount('tracks')
            ->first();

        $index = 0;
        if($saved_playlist) {
            Log::debug("Changing offset");
            $index = $saved_playlist->tracks_count;
        }

        $playlist = Playlist::updateOrCreate(
            ['spotify_id' => $spotifyPlaylist['id']],
            [
                'name' => $spotifyPlaylist['name'],
                'description' => $spotifyPlaylist['description'] ?? null,
                'public' => $spotifyPlaylist['public'] ?? true,
                'owner_name' => $spotifyPlaylist['owner']['display_name'] ?? null,
                'owner_spotify_id' => $spotifyPlaylist['owner']['id'] ?? null,
                'image_url' => $spotifyPlaylist['images'][0]['url'] ?? null,
            ]
        );

        $trackNumber = $spotifyPlaylist['tracks']['total'];

        while($index < $trackNumber) {
            $req = $this->spotify->getPlaylistItems($playlist->spotify_id, offset: $index, limit: $limit);

            $spotifyTracks = $req->json();
            if(!isset($spotifyTracks['items'])){
                //TODO This is an error state that needs to be handled
            }
            foreach ($spotifyTracks['items'] as $spotifyTrack) {
                $track = $this->insertTrack($spotifyTrack['track']);
                $playlist->tracks()->syncWithoutDetaching($track->id);
            }
            $index += $limit;
        }


        return $playlist;
    }
    public function getSpotifyUserPlaylists() {
        $newPlaylists = $this->spotify->getUsersPlaylists($this->user["id"], 20)->json();
        $newPlaylists = $this->spotify->getCurrentUsersPlaylists()->json();

        foreach($newPlaylists["items"] as $spotifyPlaylist) {
            if ($this->user["id"] == $spotifyPlaylist["owner"]["id"]) {
                $this->insertPlaylist($spotifyPlaylist);
            }
        }

        $playlists = Playlist::where('owner_spotify_id', $this->user["id"])

            ->with('tracks')
            ->get();
        return $playlists;
    }

    public function getUserPlaylists() : Collection {
        $playlists = Playlist::where('owner_spotify_id', $this->user["id"])
            ->with('tracks')
            ->get();
        if(count($playlists) == 0 || true){
            $playlists = $this->getSpotifyUserPlaylists();
            //GatherPlaylists::dispatch($this->accessToken);
        }
        return $playlists;
    }

    //Function to grab a full playlist if we don't have it
    public function checkForFullTracks(Playlist $playlist, int $limit = 20) {
        $playlist = $this->spotify->getPlaylist($playlist->spotify_id, $limit)->json(); //20 is a constant for the number of tracks
        $total = $playlist["tracks"]["total"];
        $index = $limit; //Since one request has been done


    }
    public function getPlaylist(int $id) : Playlist {
        return Playlist::where('id', $id)
            ->with('tracks')
            ->withCount('tracks')
            ->first();
    }

    public function createCuratedPlaylist(string $spotify_id, string $name, string $description, int $id, $tracks) {
        $payload = [
            "name" => $name,
            "description" => $description,
            "public" => false
        ];

        $req = Http::withToken($this->accessToken)
            ->asJson()
            ->post('https://api.spotify.com/v1/users/'.$spotify_id.'/playlists', $payload);

        $playlist_id = $req->json()["id"];

        $track_uris = collect($tracks)->map(function($track){
            return 'spotify:track:'. $track;
        })->values()->toArray();

        $payload = [
            "uris" => $track_uris
        ];

        $req = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->accessToken,
                'Content-Type' => 'application/json',
        ])->post('https://api.spotify.com/v1/playlists/'.$playlist_id.'/tracks', $payload);

        return $req->status();
    }

}
