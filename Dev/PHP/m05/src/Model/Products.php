<?php

class Product{
  private $db;

  function __construct()
  {
    $this->db = Database::getInstance();
  }

  function add($name, $price, $quantity, $description, $url)
  {
    if (!isset($name) && !isset($price) && !isset($quantity) && !isset($description) && !isset($url))
    {
      echo "Error";
      return;
    }
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO produits (nom, comment, prix, quantity, image) VALUES (:nom, :comment, :prix, :quantity, :image)";
    $postdata = $this->db->pdo->prepare($sql);
    $postdata->execute(array(
      "nom"       => $name,
      "comment"   => $description,
      "prix"      => $price,
      "quantity"  => $quantity,
      "image"     => $url
    ));
    echo "done";
  }

  function getProducts()
  {
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM produits ORDER BY id ASC";

    $getdata = $this->db->pdo->prepare($sql);
    $getdata->execute();
    $result = $getdata->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
?>
