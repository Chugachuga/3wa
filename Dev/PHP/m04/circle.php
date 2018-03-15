<?php

class Cercle extends Shape{

  protected $r;

  function __construct(){
    $this->setR(100);
  }

  function setR($value){
    $this->r = $value;
  }

  function getR(){
    return $this->r;
  }

  function draw($render){
    $render->drawCircle($this);
  }
}
?>
