<?php

class User
{
  private $db;

  function __construct(){
    $this->db = Database::getInstance();
  }

  function verif($value1, $value2)
  {
    if ($value1 == $value2)
      return TRUE;
    else
      return FALSE;
  }

  function mailexist($email)
  {
    $data1 = 'SELECT `email`
    FROM `restaurant`.`user`';

    $getdata = $this->db->pdo->prepare($data1);
    $getdata->execute();
    $result = $getdata->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $key)
    {
      if ($key['email'] == $email)
        return TRUE;
    }
    return FALSE;
  }

  function getUserByEmail($email)
  {
     $data1 ='SELECT * FROM user WHERE email = :email';
     $req = $this->db->pdo->prepare($data1);
     $req->execute([
       'email'=> $email
     ]);
     $result = $req->fetch();
     return $result;
  }

  /*function getpwd($email)
  {
    $data = 'SELECT `password`
    FROM `restaurant`.`user`
    WHERE `email` = "' . $email . '"';

    $getdata = $this->db->pdo->prepare($data);
    $getdata->execute();
    $result = $getdata->fetch(PDO::FETCH_ASSOC);
    return $result['password'];
  }*/

  function getUserByCredentials($email, $password)
  {
    if($user = $this->getUserByEmail($email))
    {
      if(password_verify($password,$user['password']))
      {
        return $user;
      }
    }
    return null;
  }

  function adduser($firstName, $lastName, $email, $verifemail, $pwd, $verifpwd, $birthdate, $address, $city, $postalCode, $phone)
  {
    if ($this->verif($email, $verifemail) && $this->verif($pwd, $verifpwd))
    {
      $this->db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if ($this->mailexist($email) == FALSE)
      {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo $email . " is not a valid email address ";
            return ;
        }
        $sql = "INSERT INTO user (email, password, firstname, lastname, birthdate, address, city, postalcode, phone) VALUES (:email, :password, :firstname, :lastname, :birthdate, :address, :city, :postalcode, :phone)";
        $postdata = $this->db->pdo->prepare($sql);
        $postdata->execute(array(
          "email"       => $email,
          "password"    => password_hash($pwd, PASSWORD_DEFAULT),
          "firstname"   => $firstName,
          "lastname"    => $lastName,
          "birthdate"   => $birthdate,
          "address"     => $address,
          "city"        => $city,
          "postalcode"  => $postalCode,
          "phone"       => $phone
        ));
        echo "<h1><i>Signed UP!</i></h1>";
      }
      else
        echo "Mail already used";
    }
    else
      echo "Error";
  }

  /*function login($email, $password)
  {
    var_dump($_SESSION);
    if($this->mailexist($email))
    {
      if(password_verify($password, $this->getpwd($email)))
      {
        $session = new Session;
        if (empty($session->get('email')))
        {
          $session->set('email', $email);
        }
      }
      else
      {
        echo "Error: unvalid password";
        return;
      }
    }
    else {
      echo "Error : unvalid email";
    }
  }*/
}
