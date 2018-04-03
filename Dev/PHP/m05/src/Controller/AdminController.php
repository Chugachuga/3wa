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
      $chemin = $image->storeFile($_FILES['prodimage']);
      $product->add($_POST['prodname'], $_POST['prodprice'], $_POST['prodquantity'], $_POST['proddescr'], $chemin);
      header('location: admin');
    }
    $this->render("addproducts");
  }

  function editproducts()
  {
    $this->loadModel('Products');
    $products = New Product;
    $list = $products->getProducts();
    $this->render("editproducts", "default", $list);
  }

  function modifProduct()
  {
    $this->loadModel('Products');
    $products = New Product;
    $product = $products->getProductById($_GET['id']);
    if (!empty($_POST) && !empty($_FILES))
    {
      foreach ($_POST as $key => $value)
      {
        if ($value == '')
        {
          echo "Error: please input all informations";
          $this->render("modifproduct", "default", $product);
          return;
        }
      }
      $image = new Upload;
      if (empty($_FILES['modifimage']['name']))
        $chemin = $products->getImageById($_GET['id']);
      else
        $chemin = $image->storeFile($_FILES['modifimage']);
      $products->modifProduct($_POST['modifname'], $_POST['modifprice'], $_POST['modifquantity'], $_POST['modifcomment'], $chemin, $_GET['id']);
      header('location: editproducts');
    }
    $this->render("modifproduct", "default", $product);
  }

  function deleteProduct()
  {
    $this->loadModel('Products');
    $products = New Product;
    $image = new Upload;
    $imgname = $products->getImageById($_GET['id']);
    $image->deleteimage($imgname);
    $products->deleteProduct($_GET['id']);

    $list = $products->getProducts();
    //header('location: editproducts');
  }

  function displayprod()
  {
    $this->loadModel('Products');
    $products = New Product;
    $list = $products->getProducts();
    $this->render("listproducts", "default", $list);
  }

  function displayreserve()
  {
    $this->loadModel("Admin");
    $admin = new Admin;
    $data = $admin->getreserve();
    $this->render("reservations", "default", $data);
  }
}
