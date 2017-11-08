
<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>This is Title!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            
            <li><a href="/">Home</a></li>
            
            <li><a href="/about">About page</a></li>
            
            <li><a href="/about/culture">About Culture</a></li>
            
            <li><a href="/contact">Contact us</a></li>
            
        </nav>
    </body>
</html>





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


<h3>to jest o wiele jaśniejszy sposób if-else-endif</h3>

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