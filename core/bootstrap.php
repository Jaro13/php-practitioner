<?php


$app=[];


$app['config']= require 'config.php';


$config = require 'config.php';

//to jest w lekcji 16
require 'core/Router.php';


require 'core/Request.php';


require 'core/database/Connection.php';


require 'core/database/QueryBuilder.php';



//te instrukcje mozna połaczyc w jedno 
//$pdo= Connection::make();
//$query = new QueryBuilder($pdo);

//$query=new QueryBuilder(Connection::make());

//mozna takze inaczej



//return new QueryBuilder(
//        Connection::make($config['database'])
//        );

//co jest w 
//var_dump($config['database'])

//mozna uzyc takze tablicy app

$app['database']= new QueryBuilder(
        Connection::make($app['config']['database'])//jakk to wyjaśnic?
        );







?>