 <?php 
session_start();
if (isset($_POST['email']) && isset($_POST['pass'])) {
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass = $_POST['pass'];
	$fail = false;

include("config.php");

//query user
$query="SELECT email,pass FROM user WHERE email='$email' and pass='$pass' ";
$rs=mysql_query($query); 
$row=mysql_fetch_object($rs); 
$getuser = mysql_num_rows($rs); 

//Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.

if($getuser > 0){ 
$_SESSION['email'] = $email;
$_SESSION['pass'] = $pass;
 echo "<script language='javascript'>
          parent.location.reload();
        </script>";

}

//Si no existe lo va a enviar al login otra vez.

else if($getuser <= 0) { 

header("location: view_login.php?error=1");
 
}
}

?>