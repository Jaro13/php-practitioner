
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
