<?php 
session_start();
include("config.php");
 $filter = $_GET['button'];

$result = "SELECT name from user WHERE name LIKE '$filter'";
$getuser = mysqli_query($bd,$result);

if (mysqli_fetch_array($getuser) == 0) {
	$msg = "<label>User available</label>";
}
else{
	$msg = "<label>User Not available</label>";
}


echo $msg;

 ?>