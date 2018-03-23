<?php
class Request{
  public $base;

  function __construct(Config $config){
    $this->base = $config->get("base", "app");
  }

  function getPath(){
    if (rtrim($_SERVER["REDIRECT_URL"], "/") == $this->base)
      return "/";
    else
      return str_replace($this->base . "/public", "", $_SERVER["REDIRECT_URL"]);
  }
}
