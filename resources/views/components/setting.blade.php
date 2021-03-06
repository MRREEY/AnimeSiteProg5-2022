@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-6">Links</h4>

            <ul>
                <li>
                    <a href="/admin/animes" class="{{ request()->is('admin/animes') ? 'text-purple-500' : '' }}">Alle Animes</a>
                </li>

                <li>
                    <a href="/admin/animes/create" class="{{ request()->is('admin/animes/create') ? 'text-purple-500' : '' }}">New Anime</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
