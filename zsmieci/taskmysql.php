<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class TaskMysql{
    public $description;
    
    public $completed;
    
    //ta metoda jest dostępna w kazdym obiekcie - czyli w rekordzie bazt
    public function foobar(){
        return 'foobar';
    }
    
}

