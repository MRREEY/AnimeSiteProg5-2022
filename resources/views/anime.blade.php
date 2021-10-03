<!doctype html>

    <title>Anime List</title>
    <link rel="stylesheet" href="/app.css">

    <body>

        <hr>

            <div class="nav">
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="/animes">Animes</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>

        <hr>

        <article>
            <?= $anime;?>
        </article>

        <a href="/animes">Go back</a>

    </body>
