<?php


class Router {
    
    
    protected $routes=[];
    
    
    public static function load($file){//to jest statyczna funkcja
        
        $router= new static;//nie wiem jak to działa
        
        //czy moze byc cos takiego
        //$router= new self;
        
        require $file;
        
        return $router;
        
        
        
    }

    



    public function define($routes){
        
        $this->routes=$routes;
        
    }
    
    public function direct($uri){
        
        
        if(array_key_exists($uri, $this->routes)){//czy $tis->routes to jest wartosc indeksu $uri
            
            //mozna spróbować hard codding - nie działa to
        //return $this->routes[$uri];
        return $this->routes[$uri];
        
        }
        //dlaczego nie działą exceptions? - jesli nie ma routes ?
        throw new Exception('No routes defined for this URI');
        //throw new Exception('No route defined for this URI.');
    }
}