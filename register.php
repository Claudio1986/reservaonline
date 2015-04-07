<?php 
session_start();
if (isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['email'])) {
$email    = $_POST['email'];
$pass     = $_POST['pass'];
$username = $_POST['username'];
$cpass    = $_POST['cpass'];

include("config.php"); 

//consult user
$result = "SELECT * from user WHERE email='$email' || pass='$pass'";

$ejecutar = mysqli_query($bd,$result);

if($pass != $cpass) {
header("location: view_register.php?iguales=1");
}

elseif (mysqli_num_rows($ejecutar) > 0) {
header("location: view_register.php?iguales=2");
}

elseif (mysqli_num_rows($ejecutar) == 0){
mysqli_query("INSERT INTO user (name, email, pass) values ( '$username' , '$email', '$pass')");
$_SESSION['email']    = $email;
$_SESSION['username'] = $username;
$_SESSION['pass']     = $pass;
 echo "<script language='javascript'>
               parent.location.reload();
        </script>";
	} 
}
?>
