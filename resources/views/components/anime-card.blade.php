@props(['anime'])

<article
    class="transition-colors duration-300 hover:bg-purple-600 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5">
        <div>
            <img src="{{ asset('storage/' . $anime->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <x-genre-button :genre="$anime->genre"/>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/animes/{{ $anime->slug }}">
                            {{ $anime->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ $anime->created_at->diffForHumans() }}</time>
                                    </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                <p>
                    {{ $anime->excerpt }}
                </p>

            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/pfPic.jpg" alt="pfPic" height="50" width="50" >
                    <div class="ml-3">
                        <h5 class="font-bold">{{ $anime->author->username }}</h5>
                    </div>
                </div>

                <div>
                    <a href="/animes/{{ $anime->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-purple-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
