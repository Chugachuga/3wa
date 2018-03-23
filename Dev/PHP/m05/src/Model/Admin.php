<?php

class Admin{
  private $db;

  function __construct(){
    $this->db = Database::getInstance();
  }
}
?>
