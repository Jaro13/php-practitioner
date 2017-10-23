<?php




function connectToDb(){

try {
//pokzac ten problem z spacją w nazwie bazy - lub login i haslo
return $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos','root','password');
    
} catch (PDOException  $e) {//zmienna $e to jest obiekt instancjia PDOExection
    //die('blad polaczenie do bazy');
    ($e->getMessage());//obiekt $e korzysta z metody getMessage()
}

}




function dd($data){
    echo '<pre>';
    
    var_dump($data);
    
    echo '</pre>';
}





function zwrocTablice ($pdo){

//przygotowanie zapytania
$stmtTab=$pdo->prepare('SELECT * from todos.todos');

//wykonanie zapytania
$stmtTab->execute();

return $resultsTab=$stmtTab->fetchAll();//powstaje tablica
}












?>