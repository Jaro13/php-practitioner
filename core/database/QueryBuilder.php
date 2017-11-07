<?php

class QueryBuilder{
    
    
    protected $pdo;

    
    public function __construct($pdo) {//tutaj type hinting czyli typ zmienne $pdo UZYWAMY JAKO OBIEKTU PDO
        
        $this->pdo=$pdo;
        
    }


    

    public function selectAll($table){
        
        //teraz pdo to property tej klasy czyli this
        //$statement = $pdo->prepare('SELECT * FROM todos');
        //takze nie hardcodujemy nazwy tabeli czyli pobieramy z parametru funkcji
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");//rjarek dlaczego nie działa? moze wersj php?
        //DZIAŁA POWYŻSZE ZAPYTANIE!!! - trzeba stosowa " podwójne apostrofy tutaj!!!
        $statement->execute();
        // mozna hardkoding zrobic
        //return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
        
        //lub wrzucic do zmiennej
        return $statement->fetchAll(PDO::FETCH_CLASS);
        
    }
    
    
    
}




?>