<?php
class Database
{
  private static  $instance = null;
  public          $pdo      = null;

  static function   getInstance($config = null)
  {
    if(self::$instance === null)
    {
      self::$instance = new Database($config);
    }
    return self::$instance;
  }

  function          __construct($config)
  {
    try
    {
      $this->pdo = new PDO($config->get("dsn", "database"), $config->get("user", "database"), $config->get("password", "database"));
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
      echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
  }
}
