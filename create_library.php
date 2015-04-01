<?php 
$title   = $_POST['title'];
$autor   = $_POST['autor'];
$des     = $_POST['des'];

include("config.php"); 

mysql_query("INSERT INTO book (title, autor, description) values ( '$title' , '$autor', '$des')");

header("location: library.php?create=1");
 ?>
 