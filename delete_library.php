<?php 
  session_start();
	$id = $_GET['id'];
	
  include("config.php");

  $result = "DELETE from book WHERE id=".$id;    
  $getuser = mysql_query($result ,$bd);

  header("location: library.php?delete=delete");

 ?>