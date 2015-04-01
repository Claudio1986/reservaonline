<?php 
//connect BD login
// mysql.hostinger.es: es donde se aloja el servidor
//u303981744_root: es user de la base de datos
//908862011: es password de la base de datos
$bd = mysql_connect('mysql.hostinger.es','u303981744_root','908862011');
//$bd = mysql_connect('mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/','adminN63vzia','Scr8K4IiBFp1');
//select BD user
// u303981744_bd1: es el nombre de la base de datos

$select = mysql_select_db('908862011', $bd);
//
//$bd = mysqli_connect('mysql.hostinger.es','u303981744_root','908862011','u303981744_bd1'); 
//if (!$bd) { 
  //  die('Could not connect to MySQL: ' . mysqli_error($bd)); 
//} 
//echo 'Connection OK'; mysqli_close($bd);  
?> 