<?php 
$hotel    = $_POST['hotel'];
$city     = $_POST['city'];
$addres   = $_POST['addres'];
$des      = $_POST['des'];

include("config.php"); 

mysql_query("INSERT INTO hotel (nombre, city, adress, description) values ( '$hotel' , '$city', '$addres', '$des')");

header("location: hotel.php?create=1");
 ?>