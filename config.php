<?php



return [
    'database'=>[
        'name'=>'todos',
        'user'=>'root',
        'password'=>'password',
        'connection'=>'mysql:host=127.0.0.1',
        'options'=>[ //tutaj to nie dziala - nie wykazuje bledow
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ], 
    ]
];