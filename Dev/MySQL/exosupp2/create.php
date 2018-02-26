<?php
session_start();

if (!empty($_SESSION['mail']))
{
  echo "Vous êtes connecté a : " . $_SESSION['mail'] . " , vous ne pouvez pas vous inscrire";
  echo "<a href='logout.php'><div class='deco'>Deconnexion</div></a>";
}
else
{
  $dsn = 'mysql:host=localhost;dbname=connexion';
  $user = 'root';
  $password = 'troiswa';
  $mail = $_POST["mail"];
  $pwd = $_POST["password"];
  $verif = $_POST["password2"];

  try {
    $dbh = new PDO($dsn, $user, $password);
  }
  catch (Exception $e)
  {
    echo "Error Connexion to database";
    exit;
  }

  function verifpwd($pwd1, $pwd2)
  {
    if ($pwd1 == $pwd2)
      return TRUE;
    else
      return FALSE;
  }

  function mailexist($mail)
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

    $data1 = 'SELECT `mail`
    FROM `connexion`.`infos`
    ORDER BY `id`';


    $getdata = $dbh->prepare($data1);
    $getdata->execute();
    $result = $getdata->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $key)
    {
      if ($key['mail'] == $mail)
        return TRUE;
    }
    return FALSE;
  }

  if ($mail && $pwd && $verif && verifpwd($pwd, $verif))
  {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (mailexist($mail) == FALSE)
    {
      if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
          echo $_POST['mail'] . " is a valid email address ";
      } else {
          echo $_POST['mail'] . " is not a valid email address ";
          return ;
      }
      $pwd = hash("whirlpool", $pwd);
      $sql = "INSERT INTO infos (mail, password) VALUES (:mail, :password)";
      $postdata = $dbh->prepare($sql);
      $postdata->execute(array(
        "mail" => $mail,
        "password" => $pwd
      ));
      echo "<h1><i>Compte créé</i></h1>";
    }
    else {
      echo "mail déja utilisé";
    }
  }
  else {
    echo "error";
  }
}
?>
