<?php 

  $id = $_GET['id'];
 
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
</head>
<body>
<?php 

  $result = "SELECT * from meeting WHERE id=".$id;    
  $getuser = mysql_query($result ,$bd);

  $row = mysql_fetch_array($getuser);
                  $age      = $row["age"];
                  $mail     = utf8_encode($row['mail']);
                  $interest = utf8_encode($row['interest']);
                  $phone    = utf8_encode($row['phone']);
                  $img      = utf8_encode($row['img']);
 ?>
  <div class="descri">  
   <div class="name">
    	<b>Age:</b> <?php echo $age ;?>
    </div><br>
    
    <div class="name">
      <b>E-mail:</b> <?php echo $mail ;?>
    </div><br>
    <hr>

    <div class="description">
    	<b>Interest:</b><br> <?php echo $interest; ?>
    </div>

    <div  class="description">
    	 <?php echo '<center><img src="img/meeting/'.$img.'"></center>'; ?>
    </div>
    
          <input type="hidden" value="<?php echo $id; ?>"  name="id" >
          <input type="hidden" value="<?php echo $id_table; ?>" name="id_table" >
          <b>phone: </b> <label><?php echo $phone; ?></label><br>
          <button type="submit" class="btn btn-success">CONTACTAR</button>
  </div>
</body>
</html>




