<?php 
  session_start();
	$id = $_GET['id'];
	
  include("config.php");

  $result = "DELETE from hotel WHERE id=".$id;    
  $getuser = mysql_query($result ,$bd);

  header("location: hotel.php?delete=delete");

 ?>