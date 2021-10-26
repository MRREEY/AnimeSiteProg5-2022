
{{--    @section('navbar')--}}
{{--        <hr>--}}

{{--        <div class="nav">--}}
{{--            <ul>--}}
{{--                <li><a href="/">Home</a></li>--}}
{{--                <li><a class="active"  href="/">Animes</a></li>--}}
{{--                <li><a href="/about">About</a></li>--}}
{{--                <li><a href="#">Login</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <hr>--}}
{{--    @endsection--}}
<x-layout>
    @include('_animes-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($animes->count())
            <x-animes-grid :animes="$animes" />
        @else
            <p class="text-center">
                Geen posts :(
            </p>

        @endif
    </main>
</x-layout>

