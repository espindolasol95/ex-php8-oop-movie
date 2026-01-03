<?php
//importo db.php
require_once __DIR__ . '/Db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>movies</title>
</head>
<body>
    <div class="contenitore">
        <div class="row">
            <h1 class='text-center my-4'>BoolFilm List</h1>
            <div class="col">
               <?php foreach ($movies as $movie): ?>
            <div class="col-md-3 mb-1">
                <div class="card p-3 shadow-sm">
                    <h5 class="card-title"><?= $movie->title ?></h5>
                    <p class="card-text">Genere: <?= $movie->getGenre()->name ?></p>
                    <p class="card-text">Anno: <?= $movie->year ?></p>
                    <p class="card-text">Durata: <?= $movie->getDuration() ?> min</p>
                </div>
            </div>
        <?php endforeach; ?>
         

            

            </div>
        </div>
    </div>
</body>
</html>