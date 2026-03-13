<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spotify Profile</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-6">
    <div class="bg-gray-800 rounded-2xl shadow-lg p-8 w-full max-w-2xl">

        <!-- User Profile -->
        <div class="flex items-center space-x-6">
            @if(!empty($spotifyUser['images']))
                <img src="{{ $spotifyUser['images'][0]['url'] }}"
                     alt="Avatar"
                     class="w-24 h-24 rounded-full shadow-md border-2 border-green-400">
            @else
                <div class="w-24 h-24 rounded-full bg-gray-700 flex items-center justify-center text-3xl">
                    🎵
                </div>
            @endif

            <div>
                <h1 class="text-2xl font-bold">{{ $spotifyUser['display_name'] }}</h1>
                <p class="text-gray-400">Spotify User</p>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 my-6"></div>

        <!-- Liked Songs -->
        <h2 class="text-xl font-semibold mb-4">Liked Songs</h2>
        <ul class="space-y-3">
            @foreach($likedTracks as $track)
                <li class="bg-gray-700 rounded-lg p-4 flex items-center space-x-4 hover:bg-gray-600 transition">
                    @if(!empty($track['album']['images']))
                        <img src="{{ $track['album']['images'][0]['url'] }}"
                             alt="Album Art"
                             class="w-14 h-14 rounded-md shadow">
                    @endif
                    <div>
                        <p class="font-medium">{{ $track['name'] }}</p>
                        <p class="text-sm text-gray-400">
                            {{ implode(', ', collect($track['artists'])->pluck('name')->toArray()) }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
</body>
</html>

