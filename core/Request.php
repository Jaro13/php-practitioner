<?php

class Request {
    
    public static function uri(){
        
        //$uri = trim ($_SERVER['request_uri'],'/');
        
        //return trim($_SERVER['request_uri'],'/');//po prostu zwarcamy wartosc
        return trim($_SERVER['REQUEST_URI'],'/'); //co tutaj bylo zle?
        
    }
    
    
}