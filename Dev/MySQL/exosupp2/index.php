<?php
session_start();

if (!empty($_SESSION['mail']))
{
  echo "<a href='logout.php'><div class='deco'>Deconnexion</div></a>";
  echo "Vous etes connecté a : " . $_SESSION['mail'];
}
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <title>exo bonus</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <main>
      <div class="container clearfix">
  			<h1 class="title">S'inscrire</h1>
  			<form action="create.php" method="post">
  				<p>E-mail : <input type="text" name="mail" /></p>
  				<p>Mot de Passe : <input type="password" name="password" /></p>
          <p>confirmation mot de passe : <input type="password" name="password2" /></p>
  				<p><input type="submit" value="Inscription"></p>
          <p><a href="login.php">Se connecter</a></p>
  			</form>
  		</div>
    </main>
  </body>
</html>
