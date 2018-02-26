<?php

$tab = array (
  "1" => array("prenom" => "Tom", "telephone" => "0102030405"),
  "2" => array("prenom" => "Joana", "telephone" => "0102233445"),
  "3" => array("prenom" => "Catherine", "telephone" => "0605455548")
);

$new = json_encode($tab);

echo $new;
?>
