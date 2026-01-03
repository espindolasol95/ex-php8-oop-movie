<?php
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/trait/HasDuration.php';

//creo genre
$fantascienza = new Genre ("Fantascienza");
$azione = new Genre ("Azione");
$supereroi = new Genre ("Supereroi");


//creo un array vuoto per i film
$movies = [];

//creo i film e li inserisco nell'array

$movie1 = new Movie ("Star Wars Una Nuova Speranza", 1977, $fantascienza);
$movie1 ->setDuration (121);
$movies[] = $movie1;


$movie2 = new Movie ("Spiderman", 2022, $azione);
$movie2 -> setDuration (130);
$movies[] = $movie2;

$movie3 = new Movie("Star Wars: El Retorno del Jedi", 1983, $fantascienza);
$movie3 ->setDuration(131);
$movies[] = $movie3;


$movie4 = new Movie("Iron Man", 2008, $supereroi);
$movie4 ->setDuration(126);
$movies[] = $movie4;

$movie5 = new Movie("Avengers: Endgame", 2019, $supereroi);
$movie5->setDuration(181);
$movies[] = $movie5;





?>

