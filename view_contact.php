<?php 
session_start();
if (isset($_SESSION['email'])) {
                  //*******Empty Session*********
   $email = $_SESSION['email'];
    if ($email == "") {
       $email    =    "";
       $login    =    "Login";
       $register =    "Register";
       //**********************************************      

    }else{//**************Sesion start****************
          $login    =  "";
          $register =  "";
          $logout   =  "<a class='blog-nav-item' href='logout.php''>Log out</a>";
          $account  =  "<a class='blog-nav-item' href='account.php'>Account</a>";
  }//************************************************

}
else{//************open page***************
      
       $login    =  "<a class='blog-nav-item active fancybox fancybox.iframe'  href='view_login.php'>login</a>";
       $register =  "<a class='blog-nav-item active fancybox fancybox.iframe'  href='view_register.php'>register</a>";
       $logout   =  "";
       $email    =  "";
       $account  =  "";
}//*********************************************

 ?>
<html>
<head>
	<title>Reserveonline</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.gif" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/docs.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link href="css/blog.css" rel="stylesheet">
	<link href="css/my_css.css" rel="stylesheet">
	<link href="css/justified-nav.css" rel="stylesheet">
  <link href="css/signin.css" rel="stylesheet">
  <script src="ajax.js" ></script>
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
	<!-- menu TOP -->
	 <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
        	  <span class="label"><img class="logo" src="img/logo.gif"></span>
        	  <a href=""><img class="social" src="img/insta.jpg" alt="Image"></a>
        	  <a href=""><img class="social1" src="img/you.jpg" alt="Image"></a>
        	  <a href=""><img class="social2" src="img/tuiter.jpg" alt="Image"></a>
        	  <a href=""><img class="social3" src="img/face.jpg" alt="Image"></a>
        	  <?php 
                  echo $login; 
                  echo $register; 
               ?>
	          <a class="blog-nav-item" href=""> <?php echo $email; ?></a>
            <?php
            echo $account;
            echo $logout; 
            ?>

	          
        </nav>
      </div>
    </div>

    <!-- header -->                                   
    <div class="jumbotron">                                   
       <img class="img_head" src="img/head.jpg" alt="Image">                                    
    	<div class="container">                                    
    	</div>                                   
    </div>                                    
    <img class="img_reserve" src="img/reserva.png" alt="Image">                                   
                                    
    <!-- menu -->                                   
     <div class="masthead">                                   
        <ul class="nav  nav-justified">                                   
          <li class="active"><a href="index.php">Home</a></li>


                              <!--*************Botones de Filtro -->

          <li><a onclick="verifica_table('hotel');" class="menu show_link">Hoteles</a></li>
          <li><a onclick="verifica_table('tuorism');" class="menu show_link">Turismo </a></li>
           <li><a onclick="verifica_table('book');" class="menu show_link">Libreria Online</a></li>                    
          <li><a onclick="verifica_table('meeting');" class="menu show_link">Reuniones</a></li> 

                              <!--*************end buttons filter -->

                            
          <li><a class="menu" href="view_contact.php">Contactenos</a></li>                                    
          </ul>                                   
      </div>

      <div class="container back_color back_body" id="content">  
       <form action="contact.php" method="POST" role="form" class="form_contact">
        <?php 
          if (isset($_GET['msg'])) {
            
                 $msg = " <span class='label label-success center-block'>Comentario enviado con exito Gracias!!</span>";

            }
          
          else{
            $msg = "s";
          }
          echo $msg;
         ?>
       	<legend>Dejenoso un comentario o consejo </legend>
   
        
       	<div class="form-group mapa">
        <div class="input">
       	 <label for="">Nombre:</label><br>
          <input type="text" class="form-control" name="name" placeholder=""><br>
          <label for="">E-mail:</label><br>
          <input type="email" class="form-control" name="email" placeholder=""><br>
          <label for="">Subjet:</label><br>
          <input type="password" class="form-control" name="Subjet" placeholder=""><br>
        </div>
       		<textarea class="form-control" name="text" placeholder=""></textarea><br><br>
       	<button type="submit" class="btn btn-primary">Enviar <span class="glyphicon glyphicon-ok"></span></button>
        </div>
        
        <!-- MAPA******************************************* -->
		<iframe class="mapa" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1664.621534023465!2d-70.66120390000002!3d-33.44297329999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a93af5ff27%3A0x81c064ef3f9381b6!2sMoneda+1744%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1426699813198" width="600" height="450" frameborder="0" style="border:0"></iframe> <br /><small>
    
    </div>
       
       	
       </form>
        </div>
        
        <!-- Footer -->
      <div class="panel ">
          <div class="panel-body"></div>
          <div class="panel-footer">
            <img class="logo" src="img/logo.gif"><br><br>
            All right &copy;<?php echo date(" Y "); ?>Santiago Chile  |  Powered by Claudio Ruz
            Software Developer
            <ul>
                <li>mapa sitio</li>
               
            </ul>
            </div>
          </div>
</body>

