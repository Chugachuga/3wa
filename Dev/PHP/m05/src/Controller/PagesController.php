<?php

class PagesController extends Controller
{
  function loadModel($str)
  {
    require_once "../src/Model/".$str.".php";
  }

  function index()
  {
    $this->loadModel("Products");
    $product = new Product;
    $data = $product->getProducts();
    $this->render("home", "default", $data);
  }
}
