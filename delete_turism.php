<?php 
  session_start();
	$id = $_GET['id'];
	
  include("config.php");

  $result = "DELETE from tuorism WHERE id=".$id;    
  $getuser = mysql_query($result ,$bd);

  header("location: tuorism.php?delete=delete");

 ?>