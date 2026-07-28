@php
    /** @var \App\Controllers\ChirpController $chirps */
@endphp

<x-layout> 
    <x-slot:title>
        Home feed
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow m-3">
            <div class="card-body">
                @guest
                <h1 class="text-3x1 font-bold mt-8">Login to Chirp</h1>
                @endguest

                @auth 
                    <x-form/>
                @endauth
            </div>
        </div>

        @if (session('success'))
            <div class="mb-4 rounded bg-green-100 p-3 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-3x1 font-bold mt-8">Latest Chirps</h1>

        @forelse ($chirps as $chirp)
        <x-chirp :chirp="$chirp"/>
        @empty
            <p class="text-gray-500">No chirps yet</p>
        @endforelse
        
    </div>

</x-layout>