<h1>administration</h1>
<a href="reservations"><div class="green_button">Réservations</div></a>
<a href="addproducts"><div class="green_button">Ajout Produits</div></a>
<a href="editproducts"><div class="green_button">Edit Produits</div></a>
<a href="listproducts"><div class="green_button">Produits</div></a>
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
