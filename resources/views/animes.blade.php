<!doctype html>

    <title>Anime List</title>
    <link rel="stylesheet" href="/app.css">

    <body>

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

        <?php foreach ($animes as $anime) : ?>

        <article>
            <h1>
                <a href="/animes/<?= $anime->slug; ?>">
                    <?= $anime->title; ?>
                </a>
            </h1>

            <div>
                <?= $anime->excerpt; ?>
            </div>

        </article>
        <?php endforeach; ?>
    </body>
