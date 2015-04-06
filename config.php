
<?php
/*
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

$bd->close();*/
//==================================================
$bd=mysqli_connect("mysql.hostinger.es","u303981744_root","908862011","u303981744_bd1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//mysqli_free_result($result);

mysqli_close($bd);
//==================================================

?>