@extends('layouts.app')


@section('content')
<div class="mx-auto p-6">
    <div class="flex gap-4">
        <form method="GET" action="{{ route('playlists.curate', $playlist->id) }}" class="mt-24">
            <h3 class="text-lg font-semibold mb-2">Subset Playlist</h3>

            <div class="space-y-3">
                <div>
                    <label class="block font-medium text-sm text-gray-300 mb-1">Search by name</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                           class="w-full border rounded p-2"
                           placeholder="song title">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-300 mb-1">Artist</label>
                    <input type="text" name="artist" value="{{ request('artist') }}"
                           class="w-full border rounded p-2"
                           placeholder="Artist Name">
                </div>

            <div class="mt-6 flex justify-between">
                <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    Apply Filters
                </button>
                <a href="{{ route('playlists.curate', $playlist->id) }}"
                   class="text-gray-500 hover:text-gray-700 text-sm self-center">
                    Clear
                </a>
            </div>
        </form>


        </div>

        <div class="bg-neutral-900 rounded-xl shadow-md p-6">
            <h3 class="text-xl font-semibold mb-4">Tracks</h3>

            @if ($tracks->isEmpty())
                <p class="text-gray-500 italic">No tracks match your filters.</p>
            @else
                <div class="space-y-3">
                    @foreach ($tracks as $track)
                        <x-track-list-item :track="$track" />
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
