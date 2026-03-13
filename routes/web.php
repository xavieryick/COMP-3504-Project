<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotifyController;
use App\Http\Controllers\ApplyFilters;

Route::get('/', function () {
    return view('home');
})->name('home');


// Redirect to Spotify OAuth
//Route::get('/auth/spotify', [SpotifyAuthController::class, 'redirect'])->name('spotify.auth');



Route::post('/logout', function(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');


// Handle OAuth callback
//Route::get('/auth/callback', [SpotifyAuthController::class, 'callback'])->name('spotify.callback');
Route::get('/user/profile', [SpotifyController::class, 'profile'])
    ->middleware('auth')
    ->name('user.profile');

Route::get('/playlist/{id}', [SpotifyController::class, 'curate'])
    ->middleware('auth')
    ->name('playlists.curate');

Route::get('playlist/create/{id}', [SpotifyController::class, 'showNewPlaylist'])
    ->middleware('auth')
    ->name('playlists.show');

Route::post('playlist/create/{id}', [SpotifyController::class, 'createPlaylist'])
    ->middleware('auth')
    ->name('playlists.create');


Route::get('/login', function(Request $request) {
    dd($request->session("errors"));
});




Route::get('/dummyPlaylist', [ApplyFilters::class, 'obtainPlaylist']);
