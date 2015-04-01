<?php 
$finca    = $_POST['finca'];
$ubicacion= $_POST['ubicacion'];
$precio   = $_POST['precio'];
$des      = $_POST['des'];

include("config.php"); 

mysql_query("INSERT INTO tuorism (finca, ubicacion, precio, description) values ( '$finca' , '$ubicacion', '$precio', '$des')");

header("location: tuorism.php?create=1");
 ?>