<?php 
session_start();

$button =  $_GET['button'];

include("config.php");

 

   switch ($button) {
        case 'create':
            echo ' <form action="create_turism.php" method="POST" role="form">
             
          <div class="form-group">
            <div class="setting">
             <label for="">finca:</label><br>
              <input type="text" class="form-control" name="finca"  value="" placeholder=""><br>

              <label for="">Ubicacion:</label><br>
              <input type="text" class="form-control" name="ubicacion" value="" placeholder=""><br>

              <label for="">precio:</label><br>
              <input type="text" class="form-control" name="precio"  value="" placeholder=""><br>
              
              <label for="">Description:</label><br>
              <textarea type="text" class="form-control" name="des"  value="" placeholder=""></textarea><br>

              <button type="submit" class="btn btn-default">Ok <span class="glyphicon glyphicon-check"></span></button>
            </div>
        <br><br>
        </div>
             
           </form>';
            break;

        case 'delete':
            $result = "SELECT * from tuorism";
            $query  = mysql_query($result  ,$bd);

            echo '<table class="table table-striped table-hover"';
           while ($row = mysql_fetch_assoc($query)){

                 echo '<tbody>
                      <tr>
                        <td>'.$row['finca'].'</td>
                        <td>'.$row['ubicacion'].'</td>
                        <td><a href="delete_turism.php?id='.$row['id'].'">Delete <span class="glyphicon glyphicon-remove"></span></a></td>
                        <td><a href="form_edit1.php?id='.$row['id'].'">Edit <span class="glyphicon glyphicon-edit"></span></a></td>

                        </tr>
                      </tbody>';

                $show_table = "";
            }
                 echo '</table>';
             break;
             
       
            

    }
 ?>