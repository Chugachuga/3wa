<?php

class Admin{
  private $db;

  function __construct(){
    $this->db = Database::getInstance();
  }

  function getdata($table, $columns)
  {
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT ".$columns.
    " FROM ".$table;

    $getdata = $this->db->pdo->prepare($sql);
    $getdata->execute();
    $result = $getdata->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  function getreserve()
  {
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT firstname, lastname, hour, min, date, couvert FROM reservation INNER JOIN user ON reservation.id_user = user.id ORDER BY date ASC, hour ASC";

    $getdata = $this->db->pdo->prepare($sql);
    $getdata->execute();
    $result = $getdata->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
?>
