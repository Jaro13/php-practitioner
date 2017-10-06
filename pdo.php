<?php


$pdo= connectToDb();//funcja zwaraca obiekt pdo


//caly proces tworzenie tabci z zapytania został przenisiony do funkcji
//podobnie mozna zrobic z ponizszymi procedurami tworzącymi obiekt
$resultsTab=zwrocTablice($pdo);

echo '<br>';
echo '<hr>';

//jako wynik powstaną obiekty
$stmtObj=$pdo->prepare('SELECT * from todos.todos');

//trzeba od początku wykonac zapytanie - aby powstaly obiekty!!!
$stmtObj->execute();

//teraz zwracamy obiekty a nie tablice
//var_dump($stmtObj->fetchAll(PDO::FETCH_OBJ));


//jeszcze raz-zawsze trzeba wykonywac execute!!!
$stmtObj->execute();

//tablica z wynikami
$resultsObj=$stmtObj->fetchAll(PDO::FETCH_OBJ);

//powinna byc tutaj wlasciwosc - completed!!! - bo przeciez rezults to obiekt
//ok działa  jest tłustym drukiem

//jeszcze raz-zawsze trzeba wykonywac execute!!!
$stmtObj->execute();//uwaga zawsze wykonc execute


//teraz wrzucamy wyniki jako obiekty do klasy Task2 z poprzedniego cwiczenia
$tasksMysql=$stmtObj->fetchAll(PDO::FETCH_CLASS, 'TaskMysql');//powolujemy do zycia nowy obiekt 

var_dump($tasksMysql[0]->foobar);



