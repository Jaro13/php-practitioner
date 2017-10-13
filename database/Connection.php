<?php



class Connection {

    public static function make($config) {//to jest metoda statyczna - mozna jej użyc bez tworzenia obiektu
        try {
//pokzac ten problem z spacją w nazwie bazy - lub login i haslo
            //return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', 'password');
            
            //pobieranie danych z pliku config.php
            return new PDO(
                    $config['connection'].';dbname='.$config['name'],
                    $config['user'],
                    $config['password'],
                    $config['options']
                    );
            
            
        } catch (PDOException $e) {//zmienna $e to jest obiekt instancjia PDOExection
            //die('blad polaczenie do bazy');
            die($e->getMessage()); //obiekt $e korzysta z metody getMessage()
        }
    }

}

//przyklad uzycia metody statycznej
//$pdo= Connection::make();

