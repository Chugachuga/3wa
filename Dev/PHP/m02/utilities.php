<?php

function csvtotab()
{
  $data = file("./tasks.csv");
  $i = 0;

  foreach ($data as $line)
  {
    $test[$i] = explode(",", $line);
    $i++;
  }
  unset($i);
  return $test;
}
?>
