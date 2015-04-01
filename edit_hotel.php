<?php 
  session_start();

    $name    = $_POST['name'];
    $city   = $_POST['city'];
    $adress    = $_POST['adress'];
    $des    = $_POST['des'];
    $id     = $_POST['old_email'];

 include("config.php");

 $sql = "UPDATE hotel SET nombre = '$name', city =  '$city', adress = '$adress', description= '$des' WHERE id = '$id'";
 mysql_query($sql);

  header("location: hotel.php?edit=1");
    
    
  ?>