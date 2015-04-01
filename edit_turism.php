<?php 
  session_start();

    $finca     = $_POST['finca'];
    $ubicacion = $_POST['ubicacion'];
    $precio    = $_POST['precio'];
    $des       = $_POST['des'];
    $id        = $_POST['old_email'];

 include("config.php");

 $sql = "UPDATE tuorism SET finca = '$finca', ubicacion =  '$ubicacion', precio = '$precio', description= '$des' WHERE id = '$id'";
 mysql_query($sql);

  header("location: tuorism.php?edit=1");
    
    
  ?>