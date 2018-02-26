<?php
session_start();

header('Location: ./index.php');

if (!empty($_SESSION['mail']))
{
  echo "Vous etes connecté a : " . $_SESSION['mail'];
  echo "<a href='logout.php'><div class='deco'>Deconnexion</div></a>";
}

function auth($mail, $pwd)
{
  $dsn = 'mysql:host=localhost;dbname=connexion';
  $user = 'root';
  $password = 'troiswa';

  try {
    $dbh = new PDO($dsn, $user, $password);
  }
  catch (Exception $e)
  {
    echo "Error Connexion to database";
    exit;
  }

  $data1 = 'SELECT `mail`, `password`
  FROM `connexion`.`infos`
  ORDER BY `id`';


  $getdata = $dbh->prepare($data1);
  $getdata->execute();
  $result = $getdata->fetchAll(PDO::FETCH_ASSOC);
  $pwd = hash("whirlpool", $pwd);
  if (!empty($mail) && !empty($pwd))
  {
    foreach ($result as $key)
    {
      if ($key['mail'] === $mail && $key['password'] === $pwd)
        return TRUE;
    }
    return FALSE;
  }
  else {
    return FALSE;
  }
}
if (filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)) {
    echo $_GET['mail'] . " is a valid email address ";
} else {
    echo $_GET['mail'] . " is not a valid email address ";
}

if (auth($_GET['mail'], $_GET['password']) == TRUE && empty($_SESSION['mail']))
{
  $_SESSION['mail'] = $_GET['mail'];
  echo "connecté a :" . $_SESSION['mail'];
}
elseif (!empty($_SESSION['mail']))
{
  echo "Deja connecté a :" . $_SESSION['mail'];
}
else
{
  echo "Wrong mail or wrong password";
}
?>
