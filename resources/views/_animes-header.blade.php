<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        De Nieuwste <span class="text-purple-700">ANIME NIEUWS</span>
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left inline-flex">
                        {{--                    als we huidige category hebben dan 'name' laten zien anders default 'Genres'--}}
                        {{ isset($currentGenre) ? ucwords($currentGenre->name) : 'Genres' }}
                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
                    </button>
                </x-slot>

                <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

                @foreach($genres as $genre)
                    {{--                       Als we een huidige genre hebben en de huidige genre id gelijk is aan de genre id DAN ACHTERGROND KLEUR GRIJS--}}
{{--                    {{ isset($currentGenre) && $currentGenre->id === $genre->id ? 'bg-gray-300' :''}}"--}}
                    <x-dropdown-item
                        href="/genres/{{$genre->slug}}"
{{--                        Controleer of de URI matched--}}
                        :active='request()->is("genres/{$genre->slug}")'
                    >{{ ucwords($genre->name) }}</x-dropdown-item>
                @endforeach
            </x-dropdown>
        </div>


        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{request('search')}}" :>
            </form>
        </div>
    </div>
</header>
