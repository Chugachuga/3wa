<?php
class CommandController extends Controller{

  function __construct(){}

  function loadModel($str)
  {
    require_once "../src/Model/".$str.".php";
  }

  function commander()
  {
    $this->loadModel('Products');
    $products = New Product;
    $list = $products->getProducts();
    $this->render("command", "default", $list);
  }
}
?>
