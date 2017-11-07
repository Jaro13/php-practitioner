<?php

//uwaga to włączenie bledów powoduje ze pojawia się exeption - 404
require 'errors.php';

//$query = require 'core/bootstrap.php';

$database= require 'core/bootstrap.php';

//co sie kryje w tablicy $app? ma dwa indeksy - config i database
//die(var_dump($app));

//$router = new Router;


//require 'routes.php';

//zienna globalna serwer
//var_dump($_SERVER);


//tylko 1 elemnt tej tablicy czyli i ideksie REQUEST_URI
//var_dump($_SERVER['REQUEST_URI']);


//$uri = trim($_SERVER['REQUEST_URI'],'/');  

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
//require $router->direct($uri);   

require Router::load('routes.php')//method chaining?
        
        //->direct($uri);
        ->direct(Request::uri());//to jest metoda statyczna z clasy Request



//mozna to takze tak zapisac

//$router= Router::load('routes.php');
        
//require $router->direct($uri);

//nie działa 404?

//koniec 22 minuta

