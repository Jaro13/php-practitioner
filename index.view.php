
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