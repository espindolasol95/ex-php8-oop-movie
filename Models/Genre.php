<?php
// Defino la clase Genre
    class Genre {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Método para obtener el nombre del género
    public function getName(){
     return $this-> name ;
    }
  
}

?>