<?php

require 'database/Connection.php';


require 'database/QueryBuilder.php';


$pdo= Connection::make();//uzycie metody statycznej z klasy Connection

//powolujemy do zycia obiekt clasy Querybuilder
//new QueryBuilder($pdo);

$query = new QueryBuilder($pdo);

//odpalamy metode selectAll z obiekty $query z klasy QueryBuilder
//$query->selectAll('todos');

//zapisujemy w zmiennje tasks - to jest tablica
$tasks=$query->selectAll('todos');

var_dump($tasks);

require 'index.view.php';

