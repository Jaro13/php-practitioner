
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





</body>
</html>




