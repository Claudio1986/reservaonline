<?php 
session_start();

if (isset( $_GET['button'])) {

$button =  $_GET['button'];

include("config.php");

  
  $sql="SELECT * from $button";
 $result=mysqli_query($bd,$sql);
 //var_dump($result ) ;


   switch ($button) {
        case 'hotel':
            $show_table = '<table class="table table-hover table-striped"><thead><tr><th>Name</th><th>City</th><th>Adress</th></tr></thead>';
            break;
        case 'tuorism':
            $show_table = '<table class="table table-hover table-striped"><thead><tr><th>Name</th><th>Location</th><th>Price</th></tr></thead>';
            break;
        case 'book':
            $show_table = '<table class="table table-hover table-striped"><thead><tr><th>title</th><th>autor</th><th>description</th></tr></thead>';
            break;
        case 'meeting':
            $show_table = '<table class="table table-hover table-striped"><thead><tr><th>name</th><th>features</th><th>interest</th></tr></thead>';
            break;
            

    }
echo $show_table;
 ?>
 <html>
 <head>
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
    if ($button == 'meeting') {
      $enlace = 'descrip_meet';
    }
    else{
      $enlace = "description";
    }

 			while ($row = mysqli_fetch_array($result)) {
 		                  $fila0 = utf8_encode($row['0']);
 		                  $fila1 = utf8_encode($row['1']);
 		                  $fila2 = utf8_encode($row['2']);
 		                  $fila3 = utf8_encode($row['3']);


 					echo'<tbody>
        					<tr>
        						<td><a class="fancybox fancybox.iframe" href="'.$enlace.'.php?id='.$fila0.'&id_table='.$button.'">
                        '. $fila1.'</td>
        						<td>'. $fila2.'</td>
        						<td>'. $fila3.'</td>
        					</tr>
        				</tbody>';

                }
  }             
  ?>


    </table> 
</body>
</html>
