<?php

//to jest pierwszy krok
//require 'bootstrap.php';

//po zmiana w bootstrap.php
$query = require 'bootstrap.php';//to jest nowy Querybuilder object?

require 'Task.php';


//odpalamy metode selectAll z obiekty $query z klasy QueryBuilder
//$query->selectAll('todos');

//zapisujemy w zmiennje tasks - to jest tablica
//$tasks=$query->selectAll('todos');

//mozna takze wykonac zapytani ora wybrac obiekt
$tasks=$query->selectAll('todos','Task');//wynik to objekty klasy Task - jest dołączona przez require

//sprawdzic o co tutaj chodz
/*
$tasks= array_map(function($task){
    
return foo;
}
        , $tasks);

*/

//die(var_dump($tasks)); //to informuje co jest zwracane - obiekt czy task object

//mamy takze dostęp do tablicy config
//var_dump($config);

//tablica asocjacyja o indeksie database
echo "<pre>";
var_dump($config['database']);
echo "</pre>";

echo "<br>";

echo "<pre>";
var_dump($config);
echo "</pre>";

echo "<br>";

echo "<pre>";
var_dump($config['database']['options']);//dlaczego tutaj nie zwraca bledow
echo "</pre>";




require 'index.view.php';

//dlaczego nie działa powtorzyc to!!! od 15 minuty takze inne