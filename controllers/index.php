<?php


//$tasks=$query->selectAll('todos');

$tasks=$app['database']->selectAll('todos');//to jest uzycie tablicy app


require 'views/index.view.php';

