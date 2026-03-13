@extends('layouts.app')

@section('content')
<div class="mx-auto p-6">
    <div class="flex gap-4">
        <div class="bg-neutral-900 rounded-xl shadow-md p-6 flex flex-col min-w-fit">
            <div class="mb-6">
                <div class="flex flex-col space-x-4">
                    <div class="mb-12">
                        <a
                            href="{{ route('user.profile') }}"
                            class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                        &lt- Return to Playlists</a>
                    </div>
                    <img src="{{ $playlist->image_url ?? 'https://placehold.co/200x200' }}"
                         alt="{{ $playlist->name }}"
                         class="w-48 h-48 rounded-lg shadow">
                    <div>
                        <h2 class="text-2xl font-bold mb-1">{{ $playlist->name }}</h2>
                        <p class="text-gray-300">{{ $playlist->description ?? 'No description' }}</p>
                    </div>
                </div>
            </div>

            @if(count($filteredTracks) != count($playlist->tracks))
            <h3 class="text-large font-semibold">Create New Curated Playlist</h3>
            <form method="POST" action="{{ route('playlists.create', $playlist->id) }}">
                @csrf
                <div>
                    <label class="block font-medium text-sm text-gray-300 mb-1">Playlist Name</label>
                    <input type="text" name="title"
                           class="w-full border rounded p-2"
                           placeholder="New Playlist Name">
                </div>
                <div class="mt-2">
                    <textarea
                    class="w-full border rounded p-2"
                    name="description"
                    placeholder="New Playlist Description"></textarea>
                </div>
                <input type="hidden" name="track_ids" value="{{ json_encode($filteredTracks->pluck('spotify_id')) }}">
                <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700"
                >Export to Spotify</button>
            </form>
            @endif

            <form method="GET" action="{{ route('playlists.curate', $playlist->id) }}" class="mt-24">
                <h3 class="text-lg font-semibold mb-2">Curate Playlist</h3>

                <div class="space-y-3">
                    <div>
                        <label class="block font-medium text-sm text-gray-300 mb-1">Search by name</label>
                        <input type="text" name="search" value="{{ request('search') }}"
                               class="w-full border rounded p-2"
                               placeholder="Song Title">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-300 mb-1">Artist</label>
                        <input type="text" name="artist" value="{{ request('artist') }}"
                               class="w-full border rounded p-2"
                               placeholder="Artist Name">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-300 mb-1">Minimum Duration (seconds)</label>
                        <input type="number" name="min_duration" value="{{ request('min_duration') }}"
                            class="w-full border rounded p-2" min="0">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-300 mb-1">Maximum Duration (seconds)</label>
                        <input type="number" name="max_duration" value="{{ request('max_duration') }}"
                            class="w-full border rounded p-2" min="0">
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-300 mb-1">Genre</label>
                        <select name="genre" class="border rounded p-2">
                            <option value="">All Genres</option>
                            @foreach ($genres as $genre)
                                <option value="{{ $genre }}" {{ request('genre') === $genre ? 'selected' : '' }}>
                                    {{ ucfirst($genre) }}
                                </option>
                            @endforeach
                        </select>
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
        </div>

        <div class="bg-neutral-900 rounded-xl shadow-md p-6">
            <h3 class="text-xl font-semibold mb-4">Tracks</h3>

            @if ($filteredTracks->isEmpty())
                <p class="text-gray-500 italic">No tracks match your filters.</p>
            @else
                <div class="space-y-3 overflow-y-scroll max-h-screen">
                    @foreach ($filteredTracks as $track)
                        <x-track-list-item :track="$track" />
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

