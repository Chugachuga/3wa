<?php

header('Location: index.php');
function getdata()
{
    $title = $_POST["titre"];
    $desc = $_POST["description"];
    $date = $_POST["datefin"];
    $prio = $_POST["priorite"];

    if (!empty($title) && !empty($desc) && !empty($date) && !empty($prio))
    {
      $tab = [
        "titre"       => $title,
        "description" => $desc,
        "datefin"     => $date,
        "priorité"    => $prio
      ];
      datatocsv($tab);
    }
    else {
      exit();
    }
}

function datatocsv($tab)
{
  $fp = fopen('tasks.csv', 'a');
  fputcsv($fp, $tab);
  fclose($fp);
}

getdata();
?>
