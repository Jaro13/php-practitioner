<?php


try {
//pokzac ten problem z spacją w nazwie bazy - lub login i haslo
$pdo = new PDO('mysql:host=127.0.0.1;dbname=todos','root','password');
    
} catch (PDOException  $e) {//zmienna $e to jest obiekt instancjia PDOExection
    //die('blad polaczenie do bazy');
    ($e->getMessage());//obiekt $e korzysta z metody getMessage()
}



//przygotowanie zapytania
$stmtTab=$pdo->prepare('SELECT * from todos.todos');

//wykonanie zapytania
$stmtTab->execute();

$resultsTab=$stmtTab->fetchAll();//powstaje tablica

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



