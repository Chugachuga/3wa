<?php

class Rectangle extends Shape
{
  protected $width;
  protected $height;

  public function __construct(){
    parent::__construct();
    $this->setSize(100, 50);
  }

  function setSize($nwidth, $nheight){
    $this->width = $nwidth;
    $this->height = $nheight;
  }

  function draw($render){
    $render->drawRectangle($this);
  }

  function getWidth(){
    return $this->width;
  }

  function getHeight(){
    return $this->height;
  }
}
?>
