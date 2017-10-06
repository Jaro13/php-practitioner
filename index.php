<?php


$greeting = "hello world";


$names=[
    'john',
    'peter',
    'mary',
];


$animals =[
    'kot',
    'pies',
    'koza',
    'byk',
];

$tabasoc =[
    'imie'=>'michu',
    'age'=>'16',
    'home animal'=>'cat',
];

//dodawanie danych do tablicy
//dadalem do tablcy wartosc bzdura o indeksie costam


$tabasoc['costam']='bzdura';

//jak dodac do tej samej tablicy wartosci losowe liczbowe losowane przez rand?


//jak usunac z tablicy dane 
unset($tabasoc['costam']); 


//uwaga trzeba zmieniac kolejnośc tych plików - w miarę wykonywanych
//cwiczen

require 'errors.php';
require 'task.php';

require 'class.php';
require 'taskmysql.php';

require 'functions.php';
require 'pdo.php';

require 'index.view.php';




?>



