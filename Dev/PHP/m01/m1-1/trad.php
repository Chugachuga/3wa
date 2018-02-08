<?php
function translate($text, $dir, $tab)
{
  switch ($dir)
  {
    case 'toEnglish':
      if (array_key_exists($text, $tab))
        echo $tab[$text];
      else
        echo "nononono";
      break;
    case 'toFrench':
      if (in_array($text, $tab))
        echo array_search($text, $tab);
      else
        echo "nononono";
      break;
  }
}

function main()
{
  if (isset($_POST["word"]))
  {
    $text = htmlentities(strtolower($_POST["word"]));
    $dir = $_POST["direction"];
    $json = file_get_contents('./test.json');
    $tab = json_decode($json, true);
    translate($text, $dir, $tab);
  }
  else {
    return;
  }
}
?>
