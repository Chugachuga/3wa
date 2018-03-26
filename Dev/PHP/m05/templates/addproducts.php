<h1>administration</h1>
<a href="reservations"><div class="green_button">Réservations</div></a>
<a href="addproducts"><div class="green_button">Ajout Produits</div></a>
<a href="#"><div class="green_button">Edit Produits</div></a>
<a href="listproducts"><div class="green_button">Produits</div></a>
<form method="POST" action="#" enctype="multipart/form-data">
<fieldset>
  <legend>Ajout Produits</legend>
  Nom du Produit<input type="text" name="prodname">
  Prix du Produit<input type="text" name="prodprice">
  Quantité du Produit<input type="number" name="prodquantity">
  Description<input type="text" name="proddescr">
  Image<input type="file" name="prodimage">
</fieldset>
<div class="oui"><input type="submit" name="submit" value="add product" class="green_button"></div>
</form>
<a href="http://localhost/gvilmont/Dev/PHP/m05/admin"><div class="annuler">annuler</div></a>
