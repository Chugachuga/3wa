<?php

class AdminController extends Controller
{
  function loadModel($str)
  {
    require_once "../src/Model/".$str.".php";
  }

  function admin()
  {
    $db= Database::getInstance();
    $this->loadModel("User");
    $userModel = new User();
    if(Auth::admin())
    {
      $this->render("admin");
      exit;
    }
  }

  function addproducts()
  {
    if (!empty($_POST))
    {
      foreach ($_POST as $key => $value)
      {
        if ($value == '')
        {
          echo "Error: please input all informations";
          $this->render("addproducts");
          return;
        }
      }
      $this->loadModel("Products");
      $product = new Product();
      $image = new Upload;
      var_dump($_FILES['prodimage']);
      $chemin = $image->storeFile($_FILES['prodimage']);
      var_dump($chemin);
      $product->add($_POST['prodname'], $_POST['prodprice'], $_POST['prodquantity'], $_POST['proddescr'], $chemin);
      header('location: admin');
    }
    $this->render("addproducts");
  }

  function displayprod()
  {
    $this->loadModel('Products');
    $products = New Product;
    $list = $products->getProducts();
    $this->render("listproducts", "default", $list);
  }

  function editProducts()
  {
    $this->loadModel('Products');
    $products = New Product;
    $list = $products->getProducts();
    $this->render("editproducts", "default", $list);
  }

  function displayreserve()
  {
    $this->loadModel("Admin");
    $admin = new Admin;
    $data = $admin->getreserve();
    $this->render("reservations", "default", $data);
  }
}
