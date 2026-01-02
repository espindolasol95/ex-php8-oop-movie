<?php
// Defino la clase Genre
    class Genre {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}
//creo la CLASSE MOVIE
class Movie {
    //definisco le PROPRIETA'
    public $title;
    public $year;
    public $genre;
    //definisco il COSTRUTTORE

    public function __construct ($title, $year, Genre $genre){

     //assegno i valori alle PROPRIETA' usando this
     $this -> title = $title;
     $this -> year = $year;
     $this -> genre = $genre;
    }

   

    //definisco un METODO
    public function getMovieInfo() {
        return $this -> title . " ( " . $this -> genre -> name. " ) " . $this -> year;
    }
}


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
    <title>movies</title>
</head>
<body>
    <h1>Movies - OPP</h1>
</body>
</html>