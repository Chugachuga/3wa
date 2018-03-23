<?php
class Config{
  private $_config = [];

  function load($configName)
  {
    $data = include ("../config/" . $configName . ".php");
    $this->_config[$configName] = $data;
  }

  function get($name, $configName)
  {
    $this->load($configName);
    if ($name == "*")
      return $this->_config[$configName];
    else
      return $this->_config[$configName][$name];
  }
}
