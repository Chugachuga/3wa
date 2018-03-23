<?php

class ReserveController extends Controller
{
  function loadModel($str)
  {
    require_once "../src/Model/".$str.".php";
  }

  function reserve()
  {
    if (!empty($_POST)){
      foreach ($_POST as $key => $value) {
        if ($value == '')
        {
          echo "error";
          $this->render("reservation");
          return;
        }
      }
      $db= Database::getInstance();
      $this->loadModel("Reserve");
      $reserve = new Reserve;
      $reserve->addReserve($_POST['date'], $_POST['hour'], $_POST['min'], $_POST['nbcouvert']);
      header('location: http://localhost/gvilmont/Dev/PHP/m05/');
    }
    $this->render("reservation");
  }
}
?>
