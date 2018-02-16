<?php

//*****************************LINK DATABASE*************************//
$rowid = intval($_GET['id']);
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

//---------------------------------------------------------------///

///*************************SELECT BON DE COMMANDE**************////
$data1 = 'SELECT `orderNumber`, `productName`,  `priceEach`, `quantityOrdered`, (`quantityOrdered` * `priceEach`) AS TOTALPRICE
FROM `orderdetails`
INNER JOIN `products`
ON `orderdetails`.`productCode` = `products`.`productCode`
WHERE `orderNumber` =:test';

$data = $dbh->prepare($data1);
$data->execute([
  "test" => $rowid
]);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
$totalht = 0;
//---------------------------------------------------------------///

//**************************SELECT INFOS***********************////
$data2 = 'SELECT `addressLine1`, `city`, `contactFirstName`, `contactLastName`, `customerName`
FROM `orders`
INNER JOIN `customers`
ON `orders`.`customerNumber` = `customers`.`customerNumber`
WHERE `orders`.`orderNumber` =:test';

$data3 = $dbh->prepare($data2);
$data3->execute([
  "test" => $rowid
]);
$result2 = $data3->fetchAll(PDO::FETCH_ASSOC);
//----------------------------------------------------------------////

//**************************TVA TTC HT******************************//
$totalht = 0;
$taux = 20;

function decimale($number)
{
  $new = number_format($number, 2, '.', '');
  return $new;
}

function totalTTC($ht, $taux)
{
  $ttc = $ht * (1 + ($taux / 100));
  echo decimale($ttc);
}

function TVA($ht, $taux)
{
  $tva = $ht * ($taux / 100);
  echo decimale($tva);
}
//-----------------------------------------------------------------//
?>
