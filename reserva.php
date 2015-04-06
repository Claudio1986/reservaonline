<?php 
  session_start();
  if (!isset($_SESSION['email'])) {
    $id       = $_POST['id'];
    $id_table = $_POST['id_table'];
    header("location: description.php?sesion=1&id=$id&id_table=$id_table");
  }
  
  $days     = $_POST['days'];
  $id       = $_POST['id'];
  $id_table = $_POST['id_table'];
  $user     = $_SESSION['email'];
/*
$sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";
$result=mysqli_query($con,$sql)
// Numeric array
$row=mysqli_fetch_array($result,MYSQLI_NUM);
printf ("%s (%s)\n",$row[0],$row[1]);

// Associative array
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
printf ("%s (%s)\n",$row["Lastname"],$row["Age"]);

// Free result set
mysqli_free_result($result);

=======================================================
$sql="SELECT * from $button";
 $result=mysqli_query($bd,$sql);
=======================================================
*/
   include("config.php");
   $consult = mysql_query("SELECT id from user WHERE email ='$user'");
   $row_id  = mysql_fetch_assoc($consult);

   $id_user = $row_id['id'];
  // Consult array 
   $con = mysql_query("SELECT * from $id_table WHERE id='$id'");
   $row = mysql_fetch_array($con);
  //Insert user
  if (count($row) > 0){
      mysql_query("INSERT INTO reservas (days, $id_table, id_user) values ( '$days' , '$id', '$id_user')");
      //mysql_query("UPDATE  $id_table SET state='off' WHERE id = '$id'");
        
         echo "<script language='javascript'>
              parent.location.reload();
            </script>";
        
  }
  
     mysql_close();

  ?>




