<?php
//importo la CLASSE GENRE
require_once __DIR__ . '/Models/genre.php';
//importo la CLASSE MOVIE
require_once __DIR__ . '/Models/Movie.php';




    //creo le ISTANZE GENRE
    $fantascienza = new Genre("Fantascienza");
    $azione = new Genre("Azione");

    //definisco le instanze
    $movie1 = new Movie ("Star Wars Una Nuova Speranza", 1977, $fantascienza);
    $movie2 = new Movie ("Spiderman", 2022, $azione);

echo '<pre>';
var_dump($movie1);
echo '</pre>';


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
    <h1>Movies - OPP</h1>
    <p><?= $movie1->getMovieInfo() ?></p>
    <p><?= $movie2->getMovieInfo() ?></p>
</body>
</html>