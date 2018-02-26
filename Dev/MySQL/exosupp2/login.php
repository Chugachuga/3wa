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
      <div class="container">
  			<h1 class="title">Se connecter</h1>
  			<form action="connect.php" method="get">
  				<p>E-mail : <input type="text" name="mail" /></p>
  				<p>Mot de Passe : <input type="password" name="password" /></p>
  				<p><input type="submit" value="Connexion"></p>
          <p><a href="index.php">S'inscrire</a></p>
  			</form>
  		</div>
    </main>
  </body>
</html>
