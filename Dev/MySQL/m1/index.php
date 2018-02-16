<?php
include 'recup.php';
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Commandes</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
  <section class="container">
    <h1 class="color title">Bons de commande</h1>
    <section class="comm">
      <h1 class="title2">Liste de commandes</h1>
      <table>
        <tr>
          <th>Commande</th>
          <th>Date de la commande</th>
          <th>Date de livraison</th>
          <th>statut</th>
        </tr>
        <?php foreach ($result as $line):?>
          <tr>
            <td><a href="recup2.php?id=<?php echo $line['orderNumber']?>">
              <?php echo $line['orderNumber']?></a></td>
            <td><?php echo $line['orderDate']?></td>
            <td><?php echo $line['requiredDate']?></td>
            <td><?php echo $line['status']?></td>
          </tr>
        <?php endforeach ?>
      </table>
      <a href="index.php?page=<?php echo ($page - 1)?>"><button><i class="fas fa-angle-left"></i></button></a>
      <h4 class="page"><?php echo $page ?></h4>
      <a href="index.php?page=<?php echo ($page + 1)?>"><button><i class="fas fa-angle-right"></i></button></a>
    </section>
  </section>
</body>
</html>
