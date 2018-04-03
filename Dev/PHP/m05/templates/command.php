<fieldset>
  <legend>Commander</legend>
  <div class="productajax">
    <select id="select">
      <?php foreach ($variables as $key): ?>
      <option value="<?php echo $key['id']; ?>"><?php echo $key['nom']; ?></option>
      <?php endforeach; ?>
    </select>
    <div class="ajaxcontent">
      <img src="" id="img">
      <p><span id="prix"></span>$</p>
      <p id="description"></p>
    </div>
    <form id="ajouter" action="#">
      Quantité : <input type="number" id="quantity" name="quantity">
      <input type="submit" value="Ajouter">
    </form>
  </div>
</fieldset>
<fieldset>
  <legend>Panier</legend>
  <div>
    <table width=100%>
      <thead><tr>
        <th>Nom du Produit</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Prix Total</th>
      </tr></thead>
      <tbody class="cartajax">
      </tbody>
    </table>
  </div>
  <form id="commander" action="#">
    <input type="submit" value="Commander" class="green_button">
    <a href="#"><div class="annuler">annuler</div></a>
  </form>
</fieldset>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
<script type="text/javascript">var chemin = "<?php echo Router::route("apicommand")?>";</script>
<script type="text/javascript" src="/gvilmont/Dev/PHP/m05/assets/js/app.js"></script>
