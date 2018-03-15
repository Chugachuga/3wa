<?php

class Program{
  function start($render){

    $rect = new Rectangle;
    $rect->setSize(200, 200);
    $rect->setColor("blue");
    $rect->setPosition(20, 20);
    $rect->setOpacity(0.8);

    $rect2 = new Rectangle;
    $rect2->setSize(150, 130);
    $rect2->setColor("red");
    $rect2->setPosition(120, 120);
    $rect2->setOpacity(0.5);

    $circle = new Cercle;
    $circle->setPosition(150, 150);
    $circle->setR(100);
    $circle->setColor("green");
    $circle->setOpacity(0.5);


    $render->addShape($rect);
    $render->addShape($rect2);
    $render->addShape($circle);
    $render->run();

    $render->getResults();

  /*$trinagle = new triangkle
    $point1 = setpostion(10, 20);
    $point2 = setpostion(105, 230);
    $point3 = setposition(30, 20);
    "" . $point1->getPosition()->getX() . "," . $oiubnt getopos() getY() . " "
    $point1->y;*/
  }
}

$program = new Program();
$render = new SvgRenderer();
$program->start($render);
?>
