<h1>administration</h1>
<a href="reservations"><div class="green_button">Réservations</div></a>
<a href="addproducts"><div class="green_button">Ajout Produits</div></a>
<a href="editproducts"><div class="green_button">Edit Produits</div></a>
<a href="listproducts"><div class="green_button">Produits</div></a>
<h2>Modifier Produit</h2>
<form method="post" action="#" enctype="multipart/form-data">
  <fieldset>
    <legend>Produit</legend>
    <label for="modifname">Nom du Produit</label>
    <input type="text" name="modifname" value="<?php echo $variables['nom']; ?>">
    <label for="modifprice">Prix</label>
    <input type="number" name="modifprice" value="<?php echo $variables['prix']; ?>">
    <label for="modifquantity">Quantité</label>
    <input type="number" name="modifquantity" value="<?php echo $variables['quantity']; ?>">
    <label for="modifcomment">Description</label>
    <input type="text" name="modifcomment" value="<?php echo $variables['comment']; ?>">
    <label for="modifimage">Image</label>
    <div class="image"><img src="<?php echo $variables['image']; ?>"></div>
    <input type="file" name="modifimage" value="<?php echo $variables['image']; ?>">
  </fieldset>
  <input type="submit" name="modify" value="modifier" class="green_button">
  <a href="editproducts"><div class="annuler">annuler</div></a>
</form>
