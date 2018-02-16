<?php

$dsn = 'mysql:host=localhost;dbname=classicmodels';
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

$limit = 10;
if (isset($_GET['page']))
{
  $page = $_GET['page'];
}
else {
  $page = 1;
}

if ($page >= 0 && $page < 34)
{
  $index = ($page - 1) * $limit;
}
elseif ($page == 34) {
  $page = 0;
  $index = ($page - 1) * $limit;
}
elseif ($page == -1) {
  $page = 33;
  $index = ($page - 1) * $limit;
}


$data1 = 'SELECT `orderNumber`, `orderDate`, `requiredDate`,`status`
FROM `classicmodels`.`orders`
ORDER BY `orderNumber`
LIMIT ' . $index . ',' . $limit . '';

$getdata = $dbh->prepare($data1);
$getdata->execute();
$result = $getdata->fetchAll(PDO::FETCH_ASSOC);
?>
