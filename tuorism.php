
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.gif" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/my_css.css" rel="stylesheet">
    <script src="ajax.js" ></script>
    <title>Administrator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row content_hotel">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Categories</a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-home "></span> Home </a></li>
            <li><a href="<?=$_SERVER["HTTP_REFERER"]?>"> <span class="glyphicon glyphicon-chevron-left">Back</span></a></li>
            <li><a href="hotel.php">Hotels</a></li>
            <li><a href="tuorism.php">tuorism</a></li>
            <li><a href="library.php">library</a></li>
          </ul>
          
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Administrator</h1>

         <a onclick="show_turis('create');" ><button type="button" class="btn btn-lg btn-default">Create tuorism</button></a>
         <a onclick="show_turis('delete');" ><button type="button" class="btn btn-lg btn-default">Delete & Edit tuorism</button></a>

          <h2 class="sub-header">Section</h2>
           <?php 
            if (isset($_GET['create'])) {
              $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Correct!</strong> Send Succesful.
              </div>';
              echo $msg;
            }
            if (isset($_GET['edit'])) {
              $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Correct!</strong> Edit Succesful.
              </div>';
              echo $msg;
            }
            if (isset($_GET['delete'])) {
              $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Correct!</strong> Delete Succesful.
              </div>';
              echo $msg;
            }

           ?>
          <div id="content">
           
          </div>
        </div>
      </div>
    </div>

    
 <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>
