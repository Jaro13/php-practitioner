<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Task2{
    public $description;//zmieić na protected
    
    public $completed=false;//co jesli zmienimy na true


    public function __construct($cokolwiek) {
        return $this->description=$cokolwiek;//jakie efekt teraz bedzie
    }
    
    
    public function isComplete(){
        return $this->completed;
    }
    
    public function complete(){
        return $this->completed=true;
    }
    
}

//$mytask = new Task2('go to store');

//var_dump($mytask);

//$mytask->complete();

//var_dump($mytask->isComplete());

//teraz tablica obiektow

$tasks = [
    
    new Task2('go to store'),
    
    new Task2('clean the room'),
    
    new Task2('idz spac'),


];




