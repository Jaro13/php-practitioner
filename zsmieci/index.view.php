
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    header{
        background: #e3e3e3;
        padding:2em;
        text-align:center;
    }
    
    </style>
</head>
<body>

<header>
<h1>

<?php echo $greeting; ?>
    
</h1>
    
<br>

<h2>składnia alternatywna</h2>

<?= $greeting; ?>



</header>

    <h3>składnia podstawowa arrays</h3>
    
    <ul>

<?php 
    foreach ($names as $name){
        echo "<li>$name</li>";
    }


?>

    </ul>


<hr>
    
    <h3>składania alternatywna arrays</h3>

    <ul>

<?php foreach($names as $name): ?>    

    <li><?= $name; ?></li>

<?php endforeach; ?>

    

    </ul>

<h3>Animals list</h3>



<hr>

<ul>
    <?php    foreach ($animals as $animal):?>
        
    <li><?= $animal?></li>
    
    <?php    endforeach;?>
</ul>


    
<h3>tablice asocjacyjne</h3>



<hr>



<ul>
<?php foreach ($tabasoc as $key => $value):?>

<li><?= 'klucz tablicy to:' ,$key, ' wartosc tablicy to: '.$value;?></li>


<?php endforeach;?>

</ul>

<ul>
    <?php foreach ($tabasoc as $key => $value):?> 
    
    <li><strong><?= $key;?></strong> <?=$value;?></li>
    
    <?php endforeach;?>
</ul>

<?php 

echo $tabasoc['imie'];



?>

<br>

<pre>

<?php var_dump($tabasoc);?>

</pre>

<br>

<?php //die(var_dump($tabasoc));?>


<h3>po funkcji die() to sie juz nie wyswietli</h3>

</body>
</html>


<h1>rozdział 8</h1>


<ul>
    
    <?php foreach ($task as $heading => $value):?>
    
    <li>
        <strong><?= ucwords ($heading) ;?></strong> <?= $value;?>
    </li>
    
    <?php endforeach;?>
    
</ul>

<hr>
<h2>2 metoda</h2>

<ul>
    <li><strong>Name: </strong><?= $task['title'];?></li>
    <li><strong>Due date: </strong><?= $task['due'];?></li>
    <li><strong>Person responsible: </strong><?= $task['assign_to'];?></li>
    <li><strong>Wykonano: </strong><?= $task['completed']?'Wykonano zadanie':'Nie wykonano';?></li>
    <li><strong>Wykonano sprawdzenie przy instukcji if: </strong><?php
        
        if ($task['completed']) {
            echo '<span class="icon">&#9989</span>';
        } else {
            echo 'not completed';
        }
        ?>
    </li>
    <li><strong>Wykonano alternatywna skladnia: </strong>
        <?php if ($task['completed']):?>
        <span class="icon" style="size: 40px;">&#9989;</span>
        
        <?php else :?>
        
        <span class="icon">&#9995</span>    
        
        <?php endif;?>
    </li>
    
    
    
</ul>



<?php 

$mytab=[
   1,2,3,10,1234123,
];

dd($mytab);


?>


<hr>

<h2>class</h2>


<?php

//var_dump($mytask);

echo "<br>";

//echo $mytask->description;

echo "<br>";

//var_dump($mytask->isComplete());


//tablica obiektow klasy Task2

//mamy tablice obiektow
dd($tasks);


?>

<h3>lista tasks</h3>

<?php 

//sprawdzenie czy zwroci prawde
echo $tasks[0]->completed;


?>


<ul>


    <?php    foreach ($tasks as $task):?>
    
    <li>
    
        <?php if ($task->completed):?>
        
        <strong>
        
        <?php endif;?>
        
            <?= $task->description;?>
        
        
        <?php if($task->completed):?>
        </strong>   
       
        <?php endif;?>



    </li>  
            
    <?php    endforeach;?>
    
    

    
</ul>  


<hr>


<h2>inna metoda - powyzsza nie dziala</h2>



<ul>


    <?php    foreach ($tasks as $task):?>
    
    <li>
    
        <?php if ($task->completed):?>
        
        <strong><?= $task->description;?></strong>
        
        
        
        <?php else :?>
        
        <?= $task->description;?>
        
        <?php endif;?>


    </li>  
            
    <?php    endforeach;?>
    
    

    
</ul>  




<hr>

<h2>pdo</h2>


<?php



//wynik jako tablica
var_dump($resultsTab);//zastosować takz funkcję dd

echo '<br>';


dd($resultsTab);


echo "<hr>";

echo '<br>';

//nasza funkcja - tablica obiktów
dd($resultsObj);



echo '<br>';

echo '<hr>';

echo '<br>';
echo '<br>';
echo '<br>';




echo 'to jest property z obiektu z bazy - kolumna description<br>';
//jak pobac 1 elemet tablicy
var_dump($resultsObj[0]->description);//property decription

echo '<br>';
echo '<br>';
echo '<br>';


//tutaj powonno byc strong bo jest przekreslone

echo 'to jest property z obiektu z bazy - kolumna completed<br>';

var_dump($resultsObj[1]->completed);

?>


<h2>pobieranie obiektów z bazy</h2>


<ul>
    
    <?php    foreach ($resultsObj as $task):?>
    
    <li>
        <?php if ($task->completed):?>
        <strong><?= $task->description;?></strong>
        <?php  else:?>
            <?= $task->description;?>
        <?php endif;?>
        
        
    </li>
    
    
    <?php    endforeach;?>
</ul>




<h2>pobieranie obiektów z bazy- PO STWRORZENIU NOWEGO OBIEKTU</h2>



    
    
    <h4>test obiektu</h4>
    <?php //var_dump($tasksMysql);?>
    
    
    
    <h4>test metody z obiektu - czyli obiekt czesciowo pobieraz dane
    z bazy czyli wlasciowsci oraz korzysta z metod danych dodatkowo w klasie
    
    </h4>

    
    <?php var_dump($tasksMysql[0]->foobar());?>
    


<ul>
    
    <?php    foreach ($tasksMysql as $task):?>
    
    <li>
        <?php if ($task->completed):?>
        <strong><?= $task->description;?></strong>
        <?php  else:?>
            <?= $task->description;?>
        <?php endif;?>
        
        
    </li>
    
    
    <?php    endforeach;?>
</ul>









