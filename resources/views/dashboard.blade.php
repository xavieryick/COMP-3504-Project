@extends('layouts.app')

@section('content')
<div class="p-8">
    <h2 class="text-2xl font-bold mb-6">Your Playlists</h2>
    <div class="flex flex-col gap-6">
        @if(count($playlists) == 0)
            <div class="w-max text-xl">
                Currenly not playlists synced.
            </div>

        @else
            @foreach ($playlists as $playlist)
            <div class="flex bg-gray-900 shadow-lg rounded-xl p-4">
                <div class="flex flex-col w-max grow-2 p-4">
                    <img src="{{ $playlist["image_url"] ?? 'https://placehold.co/300x300' }}" class="rounded-lg mb-3 w-48 h-auto">
                    <h3 class="font-bold text-xl">{{ $playlist['name'] }}</h3>
                    <a
                        class="bg-green-700 text-center hover:bg-green-900 p-4 rounded transition w-fit"
                        href="{{route("playlists.curate", ["id" => $playlist["id"]])}}"
                    >
                        Make Subset
                    </a>
                </div>

                <div class="flex flex-col gap-2 grow-1 w-full">
                    @foreach ($playlist->tracks->take(5) as $track)
                        <x-track-list-item class="w-full" :track="$track" />
                    @endforeach
                </div>
            </div>
            @endforeach
        @endif
    </div>

    @endsection
