<?php

class Point
{
  protected $x;
  protected $y;

  function __construct(){
    $this->moveTo(10, 10);
  }

  function moveTo($nx, $ny){
    $this->x = $nx;
    $this->y = $ny;
  }

  function getX(){
    return $this->x;
  }

  function getY(){
    return $this->y;
  }
}
?>
