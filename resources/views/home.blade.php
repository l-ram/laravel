@php
    /** @var \App\Controllers\ChirpController $chirps */
@endphp

<x-layout> 
    <x-slot:title>
        Home feed
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3x1 font-bold mt-8">Latest Chirps</h1>
        
        @forelse ($chirps as $chirp)
        <x-chirp :chirp="$chirp"/>
        @empty
            <p class="text-gray-500">No chirps yet</p>

        @endforelse
    </div>
</x-layout>