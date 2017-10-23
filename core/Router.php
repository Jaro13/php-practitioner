<?php


class Router {
    
    
    protected $routes=[];


    public function define($routes){
        
        $this->routes=$routes;
        
    }
    
    public function direct($uri){
        
        
        if(array_key_exists($uri, $this->routes)){//czy $tis->routes to jest wartosc indeksu $uri
            
            //mozna spróbować hard codding - nie działa to
        //return $this->routes[$uri];
        return $this->routes[$uri];
        
        }
        
        throw new Exception('No routes defined for this URI');
    
    }
}