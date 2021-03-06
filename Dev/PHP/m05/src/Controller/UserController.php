<?php

class UserController extends Controller
{
  function loadModel($str)
  {
    require_once "../src/Model/".$str.".php";
  }

  function signup()
  {
    if (!empty($_POST))
    {
      foreach ($_POST as $key => $value) {
        if ($value == '')
        {
          echo "Error: please input all informations";
          $this->render("signup");
          return;
        }
      }
      $db = Database::getInstance();
      $this->loadModel("User");
      $user = new User;
      $user->adduser($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["verifemail"], $_POST["password"], $_POST["verifpassword"], $_POST['birthdate'], $_POST['address'], $_POST['city'], $_POST['postalCode'], $_POST['phone']);
      header('location: signin');
    }
    $this->render("signup");
  }

  function signin()
  {
    if(!empty($_POST))
    {
      foreach ($_POST as $key => $value) {
        if ($value == '')
        {
          echo "Error: Please Enter information";
          $this->render("signin");
          return;
        }
      }
      $db= Database::getInstance();
      $this->loadModel("User");
      $userModel = new User();
      if($user = $userModel->getUserByCredentials($_POST['email'], $_POST['password']))
      {
        Session::set('user', $user);
        Alert::set('Bienvenue '.$user['firstname']);
      }
      else
      {
        Alert::set('Identifiant ou Mot de Passe incorrect', 'error');
        header('location: http://localhost/gvilmont/Dev/PHP/m05/signin');
        exit;
      }
      if(Auth::admin($user))
      {
        $this->render("admin");
        exit;
      }
    }
    $this->render("signin");
  }

  function logout()
  {
    Session::remove("user");
    header('location: http://localhost/gvilmont/Dev/PHP/m05/');
  }

  function commander()
  {
    $this->loadModel('Products');
    $products = New Product;
    $list = $products->getProducts();
    $this->render("command", "default", $list);
  }

  public function apigetProducts()
  {
    $this->loadModel("Products");
    $products = new Product;
    $tojson = $products->getProductByIdbis();
    $json = json_encode($tojson);
    echo $json;
    die;
  }
}
