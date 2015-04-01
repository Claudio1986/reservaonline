<?php 
  session_start();

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $pass    = $_POST['pass'];
    $id     = $_POST['old_email'];

 include("config.php");

 $sql = "UPDATE user SET name = '$name', email =  '$email', pass = '$pass' WHERE id = '$id'";
 mysql_query($sql);

  header("location: setting.php?edit=1"); 
 
    
      

  ?>




