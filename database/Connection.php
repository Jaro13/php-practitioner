<?php



class Connection {

    public static function make() {//to jest metoda statyczna - mozna jej użyc bez tworzenia obiektu
        try {
//pokzac ten problem z spacją w nazwie bazy - lub login i haslo
            return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', 'password');
        } catch (PDOException $e) {//zmienna $e to jest obiekt instancjia PDOExection
            //die('blad polaczenie do bazy');
            die($e->getMessage()); //obiekt $e korzysta z metody getMessage()
        }
    }

}

//przyklad uzycia metody statycznej
//$pdo= Connection::make();

