<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Spotify Playlist App') }}</title>
    @vite("resources/css/app.css")
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-green-800 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold hover:text-gray-200">
                    Spotify Playlist App
                </a>

                <div class="flex items-center space-x-6">
                    @auth
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="hover:text-gray-200">Logout</button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{ route('spotify.auth') }}" class="hover:text-gray-200 font-semibold">
                            Login with Spotify
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
            <p class="font-bold">Success</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
            <p class="font-bold">Error</p>
            <p>{{ session('error') }}</p>
        </div>
    @endif

    <!-- Page content -->
    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 text-center py-4 mt-auto">
        <p class="text-sm">
            &copy; {{ date('Y') }} Spotify Playlist Sorter
        </p>
    </footer>
</body>
</html>
