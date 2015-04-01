<?php 
session_start();
if (isset($_SESSION['email'])) {
                  //*******Empty Session*********
   $email = $_SESSION['email'];
    if ($email == "") {
       $email    =    "";
       $login    =  "<a class='blog-nav-item active fancybox fancybox.iframe'  href='view_login.php'>login</a>";
       $register =  "<a class='blog-nav-item active fancybox fancybox.iframe' href='view_register.php'>register</a>";
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
	<title>Reservelo online</title>
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

<body >
	<!-- menu TOP -->
	 <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
        	  <span class="label"><img class="logo" src="img/logo.gif"></span>
        	  <a href=""><img class="social" src="img/insta.jpg" alt="Image"></a>
        	  <a href=""><img class="social1" src="img/you.jpg" alt="Image"></a>
        	  <a href=""><img class="social2" src="img/tuiter.jpg" alt="Image"></a>
        	  <a href=""><img class="social3" src="img/face.jpg" alt="Image"></a>
        	 
	          <a class="blog-nav-item" href="setting.php"> <?php echo $email; ?></a>
            <?php
            
            echo $account;
            echo $logout; 
            echo $login; 
            echo $register;
            ?>
            <a href="admin.php">Administrador</a>

	          
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
        <ul class="nav nav-justified">                                   
          <li class="active"><a href="index.php">Home</a></li>

                              <!--*************BUTTTON -->

          <li><a onclick="verifica_table('hotel');"   class="menu show_link">Holteles</a></li>
          <li><a onclick="verifica_table('tuorism');" class="menu show_link">Torismo </a></li>
          <li><a onclick="verifica_table('book');"    class="menu show_link">Libreria Online</a></li>                     
          <li><a onclick="verifica_table('meeting');" class="menu show_link">Reuniones</a></li> 

                              <!--*************end BUTTON -->
                            
          <li><a class="menu" href="view_contact.php">Contactenos</a></li>                                    
          </ul>                                   
      </div>

                         <!--*************************
                                    CONTENT AJAX
                         ************************* --> 

      <div class="container back_color back_body" id="content">  
       <div class="row">                                   
          <div class="col-md-12 text-center texto"><br>
           <h2>En reserva en línea ofrecen descansar lugar los mejores hoteles, biblioteca en línea y también se puede conocer a grandes personas para una relación !!</h2><br>
           <h3>Software Optimizado</h3>
          </div>
         </div>
        <div class="row">                                   
          <div class="col-md-3 ">                            
            <img class="img_home thumbnail zoom" src="img/hotel.jpg">
            <img src="img/shadow.png" class="img-responsive shadow" alt="Image">
          </div>
          <div class="col-md-3">
            <img class="img_home thumbnail zoom" src="img/turist.jpg">
            <img src="img/shadow.png" class="img-responsive shadow" alt="Image">
          </div>
          <div class="col-md-3">
            <img class="img_home thumbnail zoom" src="img/book.jpg">
            <img src="img/shadow.png" class="img-responsive shadow" alt="Image">
          </div>
          <div class="col-md-3">
            <img class="img_home thumbnail zoom" src="img/cita1.jpg">
            <img src="img/shadow.png" class="img-responsive shadow" alt="Image">
          </div>
         </div> 
        </div>
                         <!--*************************
                                  END CONTENT AJAX
                         ************************* -->   
      
        <!-- Footer -->
      <div class="panel ">
          <div class="panel-body"></div>
          <div class="panel-footer">
            <img class="logo" src="img/logo.gif"><br><br>
            All right &copy;<?php echo date(" Y "); ?>AClaudio Ruz |  Powered by Claudio Ruz
            Software Developer
            <ul>
                <li>mapa sitio</li>
                <li>mapa sitio</li>
                <li>mapa sitio</li>
				
            </ul>
            </div>
          </div>
</body>

