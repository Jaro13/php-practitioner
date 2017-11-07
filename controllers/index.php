<?php


//$tasks=$query->selectAll('todos');

//to ponizej znajduje baze z configu 
//die(var_dump($app['config']['database']));

//$tasks=$app['config']['database']->selectAll('todos');//to jest uzycie tablicy app

//to tutaj dziala - dlaczego wczesniej byl problem?
$tasks=$app['database']->selectAll('todos');

//tablica ze szczególami konfiguracji?
//$tasks=$app['config']['database'];

//$tasks=$app['config']['database']->selectAll('todos');//to jest uzycie tablicy app

//die(var_dump($tasks));

require 'views/index.view.php';

