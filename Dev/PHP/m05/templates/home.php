<h1 class="test">accueil</h1>
<h2>Liste des produits</h2>
<table style="width:100%">
  <tr>
    <th>Image</th>
    <th>Nom du Produit</th>
    <th>Prix</th>
    <th>Quantité</th>
    <th>Description</th>
  </tr>
  <?php foreach ($variables as $key): ?>
  <tr>
    <?php extract($key) ?>
    <td><img src="<?php echo $image; ?>"</td>
    <td><?php echo $nom; ?></td>
    <td><?php echo $prix . "$"; ?></td>
    <td><?php echo $quantity; ?></td>
    <td><?php echo $comment; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
