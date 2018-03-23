<?php

class AdminController extends Controller
{
  function loadModel($str)
  {
    require_once "../src/Model/".$str.".php";
  }

  function admin(){
    $this->loadModel("Admin");
  }
}
