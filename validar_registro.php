<?php 
session_start();
include("config.php");
 $filter = $_GET['button'];

$result = "SELECT name from user WHERE name LIKE '$filter'";
$getuser = mysql_query($result ,$bd);

if (mysql_num_rows($getuser) == 0) {
	$msg = "<label>User available</label>";
}
else{
	$msg = "<label>User Not available</label>";
}


echo $msg;

 ?>