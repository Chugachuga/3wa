<?php include './trad.php' ?>

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
    <?php main() ?>
  </section>
</body>
</html>
