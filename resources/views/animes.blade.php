@extends('layout')

    @section('navbar')
        <hr>

        <div class="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a class="active"  href="/">Animes</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>

        <hr>
    @endsection


    @section('content')

        @foreach ($animes as $anime)
            <article>
                <h1>
                    <a href="/animes/{{$anime->slug}}">
                        {!! $anime->title !!}
                    </a>
                </h1>

                    <p>
                        <a href="/genres/{{ $anime->genre->slug }}">{{ $anime->genre->name }}</a>
                    </p>

                <div>
                    {!! $anime->excerpt !!}
                </div>

            </article>
        @endforeach

    @endsection
