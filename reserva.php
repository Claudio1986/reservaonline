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
 /*
	 $sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";
     $result=mysqli_query($con,$sql)
	 
	 
	 */
   include("config.php");
   $consult="SELECT id from user WHERE email ='$user'";
    $result=mysqli_query($bd,$consult)
 //  $row_id = mysqli_query($consult,MYSQLI_ASSOC);
  

   $id_user = $row_id['id'];
  // Consult array 
   $con = mysqli_query("SELECT * from $id_table WHERE id='$id'");
   $row = mysqli_fetch_array($con);
  //Insert user
  if (count($row) > 0){
      mysqli_query("INSERT INTO reservas (days, $id_table, id_user) values ( '$days' , '$id', '$id_user')");
      //mysql_query("UPDATE  $id_table SET state='off' WHERE id = '$id'");
        
         echo "<script language='javascript'>
              parent.location.reload();
            </script>";
        
  }
  
     mysqli_close();

  ?>




