<div class="container test">
    <h1 class="formtitle">Réservation d'une table</h1>
    <form method="post">
    <fieldset>
      <legend>Informations</legend>
      <form method="post" action="#">
        <p><label for="datereserve">Date de réservation
        <input type="date" name="date"> à
        <select id="hour" name="hour">
          <?php for ($h = 11; $h < 22; $h++): ?>
          <option value="<?php echo $h?>"><?php echo $h?>H</option>
          <?php endfor; ?>
        </select> :
        <select id="min" name="min">
          <?php for ($m = 0; $m < 60; $m+=30): ?>
          <option value="<?php echo $m ?>"><?php echo $m?>m</option>
          <?php endfor; ?>
        </select></p>
        <p>Nombre de couverts
          <select id="nbcouvert" name="nbcouvert">
          <?php for ($nb = 0; $nb < 13; $nb++): ?>
          <option value="<?php echo $nb ?>"><?php echo $nb?></option>
          <?php endfor; ?>
        </select></p>
      </fieldset>
      <input type="submit" name="reserver" value="Réserver" class="green_button">
    </form>
  </fieldset>
  <a href="http://localhost/gvilmont/Dev/PHP/m05/"><div class="annuler">annuler</div></a>
</div>
