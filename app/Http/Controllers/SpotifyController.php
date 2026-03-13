<?php

namespace App\Http\Controllers;


use App\Repositories\SpotifyRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class SpotifyController extends Controller
{
    function profile(Request $request): View {
        //Check user auth and get token for spotify api
        $user = auth()->user();

        $spotify = new SpotifyRepository($user->spotify_token);
        $playlists = $spotify->getUserPlaylists();
        return view("dashboard", ["playlists" => $playlists]);

    }

    function showNewPlaylist(Request $request, int $id) {
        $user = auth()->user();
        $spotify = new SpotifyRepository($user);
        $playlist = $spotify->getPlaylist($id);

        $tracks = json_decode($request->track_ids);
        return view('playlist.create', compact('playlist', 'tracks'));

    }

    function createPlaylist(Request $request, int $id) {
        Log::debug("Made it to the function");
        $user = auth()->user();
        $spotify = new SpotifyRepository($user->spotify_token);
        $playlist = $spotify->getPlaylist($id);

        if($request->filled("title") && $request->filled("track_ids")){
            $spotify_id = $user->spotify_id;
            $track_ids = json_decode($request->track_ids);
            $title = $request->title;
            $description = $request->description ?? "";

            $status = $spotify->createCuratedPlaylist($spotify_id, $title, $description, $id, $track_ids);
            if($status < 400) { //Non-fail route
                $request->session()->flash('success', 'Successfully created New Playlist' . $title);
            }else {
                $request->session()->flash('error', 'Unable to make new playlist');
            }
        }
        return redirect()->route("user.profile");

    }

    function curate(Request $request, int $id): View {
        //Get user info
        $user = auth()->user();
        $spotify = new SpotifyRepository($user);
        $playlist = $spotify->getPlaylist($id);

        $tracks = $playlist->tracks()->get();

        $genres = $tracks->flatMap(function ($track) {
            return $track->artists->flatMap(function ($artist) {
                return $artist->genres;
            });
        })->unique()->values();

        //Apply Fitering logic here
        $filteredTracks = $playlist->tracks->filter(function ($track) use ($request, $genres) {
            $match = true;

            if ($request->filled('search')) {
                $match = $match && str_contains(strtolower($track->name), strtolower($request->search));
            }
            if ($request->filled('artist')) {
                $trackArtists = $track->artists->map(function($artist) {
                    return $artist->name;
                });

                $match = $match && $trackArtists->contains(fn($a) => str_contains(strtolower($a), strtolower($request->artist)));

            }
            if ($request->filled('min_duration')) {
                $match = $match && ((float)$track->duration_ms / 1000) >= (int)$request->min_duration;
            }
            if ($request->filled('max_duration')) {
                $match = $match && ((float)$track->duration_ms / 1000) <= (int)$request->max_duration;
            }
            if($request->filled('genre')){
                $genreFilter = strtolower($request->genre);
                $trackGenres = $track->artists->flatMap(function ($artist) {
                    return $artist->genres;
                })->unique()->values();

                $match = $match && $trackGenres->contains(fn($g) => str_contains($g, $genreFilter));
            }

            return $match;
        });
        return view("playlist.subset", compact('playlist','filteredTracks', 'genres'));
    }
}
