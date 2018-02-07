<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Traducteur Anglais - Français</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="form">
    <form action="index.php" method="post">
      <input type="text"name="word">
      <select name="direction">
        <option value="toEnglish">français vers Anglais</option>
        <option value="toFrench">Anglais Vers Français</option>
      </select>
      <input type="submit" value="submit">
    </form>
    <?php
    function translate($text, $dir)
    {
      $json = file_get_contents('./test.json');
      $tab = json_decode($json, true);

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
      if(isset($_POST["word"]))
      {
        $text = htmlentities(strtolower($_POST["word"]));
        $dir = $_POST["direction"];
        translate($text, $dir);
      }
      else {
        return;
      }
    }

    main();
    ?>
  </section>
</body>
</html>
