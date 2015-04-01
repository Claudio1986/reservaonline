<?php 
  session_start();
	$id = $_GET['id'];

  include("config.php");

 //consult register*************************************
  $con = mysql_query("SELECT id_book FROM usuario WHERE id='$id'");
  $row = mysql_fetch_array($con);

  $id_book = $row['id_book'];

  $result = "DELETE from reservas WHERE id_book=".$id;    
  $getuser = mysql_query($result ,$bd);

  header("location: bienvenida.php?delete_book=delete");

 ?>
 <?php

class foo_mysqli extends mysqli {
    public function __construct($host, $usuario, $contraseña, $bd) {
        parent::init();

        if (!parent::options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
            die('Falló la configuración de MYSQLI_INIT_COMMAND');
        }

        if (!parent::options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
            die('Falló la configuración de MYSQLI_OPT_CONNECT_TIMEOUT');
        }

        if (!parent::real_connect($host, $usuario, $contraseña, $bd)) {
            die('Error de conexión (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}

$bd = new foo_mysqli('mysql.hostinger.es', 'u303981744_root', '908862011', 'u303981744_bd1');

echo 'Coneccion Establecida satisfactoriamente ' . $bd->host_info . "\n";

$bd->close();
?>