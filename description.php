<?php 
if (isset($_GET['sesion'])) {
  if ($_GET['sesion'] == 1) {

   $msg = '<center><div class="alert alert-danger">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <strong>Alert! </strong>You are not has been log in | click <a class="fancybox fancybox.iframe" href="view_login.php" >Her</a> 
         </div></center>';
}
 
}
else{
  $msg = "";
}

  $id = $_GET['id'];
	$id_table = $_GET['id_table'];
 
	include("config.php");


?>
<html>
<head>
<link href="css/my_css.css" rel="stylesheet">
 <link rel="shortcut icon" type="image/x-icon" href="img/logo.gif" />
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/docs.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
  <link href="css/blog.css" rel="stylesheet">
   <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>
      <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
      <script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
      <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
      
      <script type="text/javascript">
        $(document).ready(function() {
          $('.fancybox').fancybox();
         
        });
      </script>
      <style type="text/css">
        .fancybox-custom .fancybox-skin {
          box-shadow: 0 0 50px #222;
        }

        body {
          max-width: 100%;
          margin: 0 auto;
        }
      </style>
</head>
<body>
<?php 
 var_dump($id ) ;
  $result = "SELECT * from $id_table WHERE id=".$id;  
 
 var_dump($result ) ;    
  $getuser = mysqli_query($bd,$result);

 var_dump($getuser ) ;

   $row=mysqli_fetch_array($getuser,MYSQLI_ASSOC);
                  $id = $row[0];
                  $fila1 = utf8_encode($row['1']);                  
                  $fila4 = utf8_encode($row['description']);
                  $fila5 = utf8_encode($row['img']);
				  echo "variable filas <br>";
			     var_dump($fila1 ) ;
				   
 ?>

 
  <div class="descri">  
   <div class="name">
    	<b>Name:</b> <?php echo $fila1;?>
   </div><br><br>
   <?php echo $msg; ?>
    <hr>

    <div class="description">
    	<b>Description:</b><br> <?php echo $fila4; ?>
    </div>

    <div  class="description">
    	 <?php echo '<center><img src="img/'.$id_table.'/'.$fila5.'"></center>'; ?>
    </div><br><br>
    <hr>
    <br>

     <form  id="form" method="post" action="reserva.php">

       <b>Days</b>
          <input type="hidden" value="<?php echo $id; ?>"  name="id" >
          <input type="hidden" value="<?php echo $id_table; ?>" name="id_table" >
          <input type="date" name="days"  class=" reserve" value="" required="required" title="">
           <span class="glyphicon glyphicon-time"></span>
          <br><br>
          <button type="submit" class="btn btn-success">RESERVER <span class="glyphicon glyphicon-briefcase"></span></button>

    </form>
  </div>
</body>
</html>




