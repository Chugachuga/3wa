<?php

include 'Point.php';
include 'Shape.php';
include 'SvgRenderer.php';
include 'Rectangle.php';
include 'circle.php';
include 'Program.php';
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>TITLE OUI</title>
</head>
<body>
  <svg width=500 height=500>
    <?php $render->getResults();?>
  </svg>
</body>
</html>
