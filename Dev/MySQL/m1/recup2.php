<?php
include 'functions.php';
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Commandes</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="container">
    <h1 class="color title">Bons de commande</h1>
    <a href="index.php" class="title2">Retourner à l'accueil</a>
    <section class="infos">
      <h2><?php echo $result2[0]['customerName']; ?></h2>
      <h3><?php echo $result2[0]['addressLine1']; ?></h3>
      <h3><?php echo $result2[0]['contactFirstName'];
      echo " " . $result2[0]['contactLastName']; ?></h3>
      <h3><?php echo $result2[0]['city']; ?></h3>
    </section>
    <HR>
    <section class="comm">
      <h1 class="title">Bon de commande n°<?php echo $rowid ?></h1>
      <table>
        <tr>
          <th>Produit</th>
          <th>Prix unitaire</th>
          <th>Quantité</th>
          <th>Prix total</th>
        </tr>
        <?php foreach ($result as $line):?>
          <tr>
            <td><?php echo $line['productName']?></td>
            <td><?php echo $line['priceEach']?></td>
            <td><?php echo $line['quantityOrdered']?></td>
            <td><?php echo (decimale($line['TOTALPRICE']))?></td>
            <?php $totalht += $line['TOTALPRICE'] ?>
          </tr>
        <?php endforeach ?>
        <tr>
          <td colspan="3" class="color">Montant Total HT</td>
          <td><?php echo decimale($totalht) ?></td>
        </tr>
        <tr>
          <td colspan="3" class="color">TVA (20%)</td>
          <td><?php TVA($totalht, $taux);?></td>
        </tr>
        <tr>
          <td colspan="3" class="color">Montant Total TTC</td>
          <td><?php totalTTC($totalht, $taux);?></td>
        </tr>
      </table>
    </section>
  </section>
</body>
</html>
