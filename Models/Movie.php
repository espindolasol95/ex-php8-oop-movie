
<?php
//creo la CLASSE MOVIE
class Movie {
    //definisco le PROPRIETA'
    public $title;
    public $year;
    protected Genre $genre;
    //definisco il COSTRUTTORE

    public function __construct ($title, $year, Genre $genre){

     //assegno i valori alle PROPRIETA' usando this
     $this -> title = $title;
     $this -> year = $year;
     $this -> genre = $genre;
    }

   

    //definisco un METODO
    public function getMovieInfo() {
        return $this -> title;
    }
}




?>
