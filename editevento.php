<?php  

require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();  
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT * FROM eventos where evento_id='".$_POST["id"]."'";  
      $query_run = $conexion->query($query);  
      $row = $query_run->fetch_array();  
      echo json_encode($row);  
 }  
 ?>

                                                       
