<?php
class Controller
{
  function render($viewName, $template = "default", $variables = [])
  {
    ob_start();
      require_once "../templates/" . $viewName . ".php";
    $content = ob_get_clean();
    require_once "../templates/" . $template . ".php";
  }
}
