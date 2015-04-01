<?php 
if (isset($_GET['error'])) {
  if ($_GET['error'] = 1) {
  
 $msg = '<center><div class="alert alert-danger">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <strong>Wrong Login</strong> Invalid User or Pasword. try again!!
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
	<center><img class="logo_form" src="img/logo.gif"><hr>
	<a href=""><img class="img_fb" src="img/fb.jpg"></a></center>
  <?php  echo $msg; ?>
  <div class="container">
  		<form class="form-signin" role="form" action="login.php" method="POST">
            <h2 class="form-signin-heading">Log In</h2>
            <input type="email" class="form-control" placeholder="E-mail" name="email" required autofocus>
            <input type="password" class="form-control" placeholder="Password" name="pass" required><br>
            If You're not register | click <a class="fancybox fancybox.iframe" href='view_register.php'> Her</a><br><br>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         </form>
        
     </div> 

</body>
</html>