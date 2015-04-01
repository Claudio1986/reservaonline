<?php 
session_start();
if (isset($_POST['name'])) {
	
	header("location: view_contact.php?msg=1");
}
?>
