<?php


class Test{
  
  public $zmienna;
  
  public function getName($zmienna)
  {
  
    return $this->zmienna=$zmienna;

  }
  
}


//$name = 'michu';

myObj= new Test;

myObj->getName($name);

//echo myObj;


