<?php
include 'utilities.php';
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <HR>
    <section class="list">
      <form action="remove.php" method="POST">
        <?php
        // FONCTION CONVERT CSV IN TAB //
        $test = csvtotab();
        //---------------------------- //
        // DISPLAY EVERY TITLE IN CHECKBOX //
        foreach ($test as $line): ?>
        <input type='checkbox' class='list' name='list'><label for="<?  echo $line[0] ?>"><?php echo $line[0] ?></label>
        <?php endforeach
        //---------------------------------//
        ?>
        <br><input type="submit" value='delete' name='suppr'>
      </form>
    </section>
    <form action="add.php" method="POST">
      <h1>Titre : </h1>
      <input type="text" name="titre">
      <h1>Description : </h1>
      <textarea name="description" placeholder="description...">
      </textarea>
      <h1>Date fin : </h1>
      <input type="date" name="datefin" id="date">
      <h1>Priorité : </h1>
      <input type="radio" name="priorite" value="basse">
      <label for="basse">Basse</label>
      <input type="radio" name="priorite" value="normal">
      <label for="normal">Normal</label>
      <input type="radio" name="priorite" value="haute">
      <label for="haute">Haute</label><br>
      <input type="submit" value="Submit" name="submit">
    </form>
  </main>
</body>
</html>
