<?php 
  session_start();

    $title   = $_POST['title'];
    $autor   = $_POST['autor'];
    $id      = $_POST['old_email'];
    

 include("config.php");

 $sql = "UPDATE book SET title = '$title', autor = '$autor' WHERE id = '$id'";
 mysql_query($sql);

  header("location: library.php?edit=1");
    
    
  ?>