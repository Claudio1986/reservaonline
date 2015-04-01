<?php 
if (isset($_GET['iguales'])) {
   if ($_GET['iguales'] == 1) {
  
     $msg = '<center><div class="alert alert-danger">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <strong>Wrong Register</strong> The Password aren´t match!!
         </div></center>';
    }
    elseif ($_GET['iguales'] == 2) {
         $msg = '<center><div class="alert alert-danger">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <strong>Wrong Register</strong> The User exist!
         </div></center>';
    }

}
else{
   $msg = "";
}
 ?>

<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/docs.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>
    <script type="text/javascript"  src="source/jquery.fancybox.js?v=2.1.5"></script>
    <script type="text/javascript"  src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link href="css/my_css.css" rel="stylesheet">
    <script type="text/javascript" src="ajax.js"></script>
      
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
	<center><h4 class="modal-title"><img class="logo_form" src="img/logo.gif"></h4></center><hr>
  <?php  echo $msg; ?>
    <div class="container">
	   <form class="form-signin" role="form" action="register.php" method="POST">
            <h2 class="form-signin-heading">Register For Reservation</h2>
            <div id="content"></div>
            <input type="text" class="form-control" placeholder="Username" name="username" id="button" onkeyup="registro();" required>
            <br>

            <input type="email" class="form-control" placeholder="E-mail" name="email" required autofocus><br>

            <input type="password" class="form-control" placeholder="Password" name="pass" required><br>

            <input type="password" class="form-control" placeholder="Confirm Password" name="cpass" required><br>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
          </form> 
    </div>
</body>
</html>




