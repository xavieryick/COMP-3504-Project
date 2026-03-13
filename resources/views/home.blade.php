@extends('layouts.app')

@section('content')

<div class="flex flex-col items-center justify-center h-screen text-center">
    <h1 class="text-4xl font-bold mb-6">Welcome to Spotify Playlist Creator</h1>
    <a href="{{ route('spotify.auth') }}" class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600">
        Login with Spotify
    </a>
</div>

@endsection
