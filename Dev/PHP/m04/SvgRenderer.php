<?php

class SvgRenderer{

  protected $shapes = [];
  protected $results = [];

  function addShape($shape)
  {
    array_push($this->shapes, $shape);
  }

  function run()
  {
    foreach ($this->shapes as $value)
    {
      $value->draw($this);
    }
  }

  function drawRectangle($rect)
  {
    array_push($this->results, '<rect width="' . $rect->getWidth() . '" height="'
    . $rect->getHeight() . '" x="' . $rect->getPosition()->getX() .'" y="'
    . $rect->getPosition()->getY() .'" style="fill:' .$rect->getColor() . ';fill-opacity:' . $rect->getOpacity() .'"></rect>');
  }

  function drawCircle($circle)
  {
    array_push($this->results, '<circle cy="' . $circle->getPosition()->getY() . '" cx="' . $circle->getPosition()->getX() . '" r="' . $circle->getR() . '" style="fill:' . $circle->getColor() . ';fill-opacity:' . $circle->getOpacity() .'"></circle>');
  }

  function getResults()
  {
    foreach ($this->results as $value)
    {
      echo $value;
    }
  }
}
?>
