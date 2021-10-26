@props(['animes'])

<x-anime-featured-card :anime="$animes[0]" />

@if ($animes->count() > 1)
    <div class="lg:grid lg:grid-cols-2">
        @foreach ($animes->skip(1) as $anime)
            <x-anime-card
                :anime="$anime"
                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />
        @endforeach
    </div>
@endif
