<?php

abstract class Shape
{
  protected $position;
  protected $color;
  protected $opacity;

  function __construct(){
    $this->position = new Point;
    $this->position->moveTo(10, 10);
    $this->color = "black";
    $this->opacity = 0.8;
  }

  function setPosition($nx, $ny)
  {
    $this->position = new Point;
    $this->position->moveTo($nx, $ny);
  }

  function getPosition(){
    return $this->position;
  }

  function setColor($ncolor){
    $this->color = $ncolor;
  }

  function setOpacity($nopacity){
    $this->opacity = $nopacity;
  }

  function getColor(){
    return $this->color;
  }

  function getOpacity(){
    return $this->opacity;
  }
  abstract function draw($render);
}
?>
