<?php

class Upload
{
  function storeFile($file)
  {
    $target_dir = "assets/img/";
    $target_file = $target_dir . basename($file['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"]))
    {
        $check = getimagesize($file["tmp_name"]);
        if($check !== false)
        {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        }
        else
        {
          echo "File is not an image.";
          $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file))
    {
      $this->deleteimage($target_file);
      $uploadOk = 1;
    }
    // Check file size
    if ($file["size"] > 500000)
    {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" )
    {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else
    {
      if (move_uploaded_file($file["tmp_name"], $target_file))
      {
        echo "The file ". basename($file["name"]). " has been uploaded.";
        return $target_file;
      }
      else
        echo "Sorry, there was an error uploading your file.";
    }
  }

  function deleteimage($filename)
  {
    if($filename)
      unlink($filename);
    else
      return;
  }
}
