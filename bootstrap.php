<?php


$config = require 'config.php';


require 'database/Connection.php';


require 'database/QueryBuilder.php';



//te instrukcje mozna połaczyc w jedno 
//$pdo= Connection::make();
//$query = new QueryBuilder($pdo);

//$query=new QueryBuilder(Connection::make());

//mozna takze inaczej
return new QueryBuilder(
        Connection::make($config['database'])
        );

//co jest w var_dump($config['database'])


?>