<?php
//definisco il TRAIT Hasduration
trait HasDuration{
//definisco la PROPRIETA'    
public $duration;

//definisco il METODO
public function setDuration($duration){

    $this -> duration = $duration; //assegno il valore alla PROPRIETA'
}


public function getDuration(){
    
    return $this -> duration; // ritorno il valore della PROPRIETA'
}


}







?>