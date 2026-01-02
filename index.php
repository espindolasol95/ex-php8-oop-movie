<?php
//creo la CLASSE MOVIE

class Movie {
    //definisco le PROPRIETA'
    public $title;
    public $genre;
    public $year;

    //definisco il COSTRUTTORE

    public function __construct ($title, $genre, $year){

     //assegno i valori alle PROPRIETA' usando this

     $this -> title = $title;
     $this -> genre = $genre;
     $this -> year = $year;
    }

    //definisco un METODO
    public function getMovieInfo() {
        return $this -> title . " ( " . $this -> genre . " ) " . $this -> year;
    }

   
}

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