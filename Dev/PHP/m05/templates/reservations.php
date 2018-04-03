<h1>administration</h1>
<a href="reservations"><div class="green_button">Réservations</div></a>
<a href="addproducts"><div class="green_button">Ajout Produits</div></a>
<a href="editproducts"><div class="green_button">Edit Produits</div></a>
<a href="listproducts"><div class="green_button">Produits</div></a>
<h2>Réservations</h2>
<table style="width:100%">
  <tr>
    <th>Nom de réservation</th>
    <th>date</th>
    <th>heure</th>
    <th>couverts</th>
  </tr>
  <?php foreach ($variables as $key): ?>
  <tr>
    <?php extract($key) ?>
    <td><?php echo $firstname ." ". $lastname; ?></td>
    <td><?php echo $date; ?></td>
    <td><?php echo $hour . "h". $min; ?></td>
    <td><?php echo $couvert; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
