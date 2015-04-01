<?php 
session_start();

$button =  $_GET['button'];

include("config.php");

 

   switch ($button) {
        case 'create':
            echo ' <form action="create.php" method="POST" role="form">
             
          <div class="form-group">
            <div class="setting">
             <label for="">hotel:</label><br>
              <input type="text" class="form-control" name="hotel"  value="" placeholder=""><br>

              <label for="">City:</label><br>
              <input type="text" class="form-control" name="city" value="" placeholder=""><br>

              <label for="">Addres:</label><br>
              <input type="text" class="form-control" name="addres"  value="" placeholder=""><br>
              
              <label for="">Description:</label><br>
              <textarea type="text" class="form-control" name="des"  value="" placeholder=""></textarea><br>

              <button type="submit" class="btn btn-default">Ok <span class="glyphicon glyphicon-check"></span></button>
            </div>
        <br><br>
        </div>
             
           </form>';
            break;

        case 'delete':
            $result = "SELECT * from hotel";
            $query  = mysql_query($result  ,$bd);

            echo '<table class="table table-striped table-hover"';
           while ($row = mysql_fetch_assoc($query)){

                 echo '<tbody>
                      <tr>
                        <td>'.$row['nombre'].'</td>
                        <td>'.$row['city'].'</td>
                        <td><a href="delete_hotel.php?id='.$row['id'].'">Delete <span class="glyphicon glyphicon-remove"></span></a></td>
                        <td><a href="form_edit.php?id='.$row['id'].'">Edit <span class="glyphicon glyphicon-edit"></span></a></td>

                        </tr>
                      </tbody>';

                $show_table = "";
            }
                 echo '</table>';
             break;
       
            

    }
 ?>