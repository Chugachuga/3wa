<?php

Class Reserve
{
  private $db;

  function __construct()
  {
    $this->db = Database::getInstance();
  }

  function getId()
  {
    if ($_SESSION)
    {
      $iduser = $_SESSION['user']['id'];
      return $iduser;
    }
    else
    {
      return null;
    }
  }

  function clean(){
    $_POST = array();
  }

  function addReserve($date, $hour, $min, $couverts)
  {
    if (!isset($date) && !isset($hour) && !isset($min) && !isset($couverts))
    {
      echo "Error";
      return;
    }
    else
    {
      if($id_user = $this->getId())
      {
        $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO reservation (id_user, date, hour, min, couvert) VALUES (:id_user, :date, :hour, :min, :couvert)";
        $postdata = $this->db->pdo->prepare($sql);
        $postdata->execute(array(
          "id_user"     => $id_user,
          "date"        => $date,
          "hour"        => $hour,
          "min"         => $min,
          "couvert"     => $couverts
        ));
        echo "Réservé !";
        $this->clean();
      }
      else {
        echo "You need to connect";
      }
    }
  }
}
?>
