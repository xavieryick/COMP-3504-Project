@props(['track', "artistNames"])
<div class="flex items-center bg-gray-600 border border-black shadow-sm rounded-xl p-3 transition">
    <img src="{{ $track->album->image_url ?? 'https://placehold.co/64x64' }}" alt="Album art" class="w-16 h-16 rounded-md object-cover">

    {{-- Track info --}}
    <div class="ml-4 flex-1">
        <h4 class="font-semibold text-gray-900">{{ $track->name }}</h4>
        <p class="text-gray-500 text-sm"> {{$artistNames}} • {{ $track->album ->name }}</p>
    </div>

    {{-- Duration --}}
    <span class="text-gray-400 text-sm mr-4">
        {{ gmdate('i:s', (int)($track->duration_ms / 1000.0)) }}
    </span>

</div>
