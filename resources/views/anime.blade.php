<!doctype html>

    <title>Anime List</title>
    <link rel="stylesheet" href="/app.css">

    <body>

        <hr>

            <div class="nav">
                <ul>
                    <li><a class="active" href="/">Home</a></li>
                    <li><a href="/">Animes</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>

        <hr>

        <article>
            <h1>
                {!! $anime->title !!}
            </h1>

            <div>
                {!! $anime->body !!}
            </div>

        </article>

        <a href="/">Go back</a>

    </body>
