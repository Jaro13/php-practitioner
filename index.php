<?php



//$query = require 'core/bootstrap.php';

$database= require 'core/bootstrap.php';


$router = new Router;


require 'routes.php';

//zienna globalna serwer
//var_dump($_SERVER);


//tylko 1 elemnt tej tablicy czyli i ideksie REQUEST_URI
//var_dump($_SERVER['REQUEST_URI']);


$uri = trim($_SERVER['REQUEST_URI'],'/');  

//dlaczego nie generuje sie uri
//tutaj widać ze działą funkcja trim - działe tylko na indeksie!!!
//var_dump($uri);


//o co tutaj chodzi?
//require $router->direct($uri);   

//var_dump($uri);

//to ponizsze działa 
//require $router->direct('about/culture');   
//koniec 13,38
 

//gdzie jest ta proba routingu - pliki partials - to co nie dziala?
require $router->direct($uri);   

