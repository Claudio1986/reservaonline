<?php 
session_start();

$button =  $_GET['button'];

include("config.php");

 

   switch ($button) {
        case 'create':
            echo ' <form action="create_library.php" method="POST" role="form">
             
          <div class="form-group">
            <div class="setting">
             <label for="">title:</label><br>
              <input type="text" class="form-control" name="title"  value="" placeholder=""><br>

              <label for="">Autor:</label><br>
              <input type="text" class="form-control" name="autor" value="" placeholder=""><br>

              <label for="">Description:</label><br>
              <input type="text" class="form-control" name="des"  value="" placeholder=""><br>
              

              <button type="submit" class="btn btn-default">Ok <span class="glyphicon glyphicon-check"></span></button>
            </div>
        <br><br>
        </div>
             
           </form>';
            break;

        case 'delete':
            $result = "SELECT * from book";
            $query  = mysql_query($result  ,$bd);

            echo '<table class="table table-striped table-hover"';
           while ($row = mysql_fetch_assoc($query)){
           	 $fila1 = utf8_encode($row['title']);
           	 $fila2 = utf8_encode($row['autor']);

                 echo '<tbody>
                      <tr>
                        <td>'.$fila1.'</td>
                        <td>'.$fila2.'</td> 	
                       <td><a href="delete_library.php?id='.$row['id'].'">Delete <span class="glyphicon glyphicon-remove"></span></a></td>
                        <td><a href="form_edit_library.php?id='.$row['id'].'">Edit <span class="glyphicon glyphicon-edit"></span></a></td>

                        </tr>
                      </tbody>';

                $show_table = "";
            }
                 echo '</table>';
             break;
       
            

    }
 ?>