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

  function modifproduct($name, $price, $quantity, $description, $url, $id)
  {
    if (!isset($name) && !isset($price) && !isset($quantity) && !isset($description) && !isset($url) && !isset($id))
    {
      echo "Error";
      return;
    }
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE produits SET nom = :nom, comment = :comment, prix = :prix, quantity = :quantity, image = :image WHERE id = :id";
    $postdata = $this->db->pdo->prepare($sql);
    $postdata->execute([
      "nom"       => $name,
      "comment"   => $description,
      "prix"      => $price,
      "quantity"  => $quantity,
      "image"     => $url,
      'id'        => $id
    ]);
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

  function getProductById($id)
  {
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM produits WHERE id = :id";

    $getdata = $this->db->pdo->prepare($sql);
    $getdata->execute([
      'id' => $id
    ]);
    $result = $getdata->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
  }

  function getProductByIdbis()
  {
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM produits WHERE id = :id";

    $getdata = $this->db->pdo->prepare($sql);
    $getdata->execute([
      'id' => $_GET['id']
    ]);
    $result = $getdata->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
  }

  function deleteProduct($id)
  {
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'DELETE FROM produits WHERE id = :id';
    $getdata = $this->db->pdo->prepare($sql);
    $getdata->execute([
      'id' => $id
    ]);
    return;
  }

  function getImageById($id)
  {
    $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT image FROM produits WHERE id = :id';
    $getdata = $this->db->pdo->prepare($sql);
    $getdata->execute([
      'id' => $id
    ]);
    $result = $getdata->fetch();
    return $result['image'];
  }

  function edit($id, $name, $price, $comment, $quantity, $url = "")
  {
    echo $id;
    echo $name;
  }
}
?>
