<?php 
  session_start();
  
  include("config.php");

$id = "";
if (!isset($_GET['edit'])) {
      $email =   $_SESSION['email'];
      $con1  = mysql_query("SELECT * FROM user WHERE email='$email'");
      $row   = mysql_fetch_array($con1);
      $id    = $row['id'];
      $name  = $row['name'];
      $email = $row['email'];
      $pass  = $row['pass']; 
      $msg   = "";
}
else{
    $name = "";
    $msg  = '<div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Ok!</strong> Setting success Come back to Log In
          </div>';
    $email = "";
    $pass  = "";
}



 ?>

 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Setting</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.gif" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/my_css.css" rel="stylesheet">
    <script src="ajax.js" ></script>   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-fixed-top color1" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Reserv Online</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
                   <!-- BUSCADOR -->
           
            <!--END  -->
      
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Setting</a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-home "></span> Home </a></li>
            <li><a href="account.php">Account</a></li>
            
          </ul>
          
         
        </div>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">User: <?php echo $name;  ?></h1>
          <?php echo $msg; ?>

           <form action="edit.php" method="POST" role="form">
             <legend>Setting</legend>
          <div class="form-group">
        <div class="setting">
         <label for="">Name:</label><br>
          <input type="text" class="form-control" name="name"  value="" placeholder="<?php echo $name; ?>"><br>
          <label for="">E-mail:</label><br>
          <input type="email" class="form-control" name="email" value="" placeholder="<?php echo $email ?>"><br>
          <label for="">Password:</label><br>
          <input type="password" class="form-control" name="pass"  value="" placeholder="<?php echo $pass ?>"><br>
          <input type="hidden" name="old_email" value="<?php echo $id ?>"placeholder=""><br>
          <button type="submit" class="btn btn-default">Edit <span class="glyphicon glyphicon-edit"></span></button>
        </div>
        <br><br>
        </div>
             
           </form>
        </div>
        </div>
      </div>
    </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>    
</html>
