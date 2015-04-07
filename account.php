<?php 
	session_start();
	$email =  $_SESSION['email'];
	include("config.php");

		  //***********************
			//   QUERY ID USER  
			//***********************
   $consult = mysqli_query("SELECT id,name from user WHERE email ='$email'");
   $row_id  = mysqli_fetch_assoc($consult);
   $id = $row_id['id'];
   $name = $row_id['name'];

   		//***********************
			//    QUERY USER
			//***********************
$result = "SELECT nombre,title,finca, hotel.id, tuorism.id, book.id from hotel,tuorism,book,reservas WHERE reservas.hotel = hotel.id AND reservas.id_user = '$id' AND reservas.tuorism = tuorism.id AND reservas.book = book.id ";
  $getuser = mysqli_query($bd,$result);

  		//***********************
			//    AMOUNT RESERVE
			//***********************
  $res = "SELECT COUNT(*) from reservas WHERE reserva.id_user = '$id'";
  $get = mysqli_query($bd,$res);
  $count = mysqli_result($get,'0');

  		//***********************
			//   MSG DELETED
			//***********************

  	if (isset($_GET['delete_book'])) {
       if ($_GET['delete_book'] == "delete") {
             $delete = "delete Succes";
           }
         }
    else{ $delete = "";}

   		//***********************
			//    EMPTY TABLE
			//***********************

 $num = mysqli_num_rows($getuser);
	    if ($num == "") {
	        $show = '<div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Info! </strong> There is Not reserve still!!. Go to the main menu.
            </div>';
	    }
	    else{
	     
	      $show =  '<table class="table table-striped table-hover">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Data</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                    </table>';
	    }

 ?>


 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Administrator</title>
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

    <div class="navbar navbar-fixed-top color" role="navigation">
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
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Reservation</a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-home "></span> Home </a></li>
             <li><a href="setting.php">Settings</a></li>
            <li><a href="#">Num Reserve <span class="badge">1<?php echo $count; ?> </span></a></li>

            
          </ul>
          
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">User: <?php echo $name ?></h1>
           <?php 


                echo $delete;

		   		echo $show; 

   		  while ($row = mysql_fetch_array($getuser)){
   		  				      $fila0 = utf8_encode($row['0']);
 		                  $fila1 = utf8_encode($row['1']);
 		                  
 		          echo '<table class="table table-striped table-hover">
                      <tbody>
                          <tr>
                              <td>'.$fila1.'</td>
                              
                              <td><a href="delete.php?id='.$row['0'].'">Delete</a></td>

                          </tr>
                      </tbody>
                  </table>';
     }           
		 ?>

        </div>
      </div>
    </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>    
</html>
