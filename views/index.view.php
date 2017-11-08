

        
<?php require ('partials/head.php'); ?>






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


<?php require ('partials/footer.php'); ?>