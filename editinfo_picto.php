<?php  

require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT * from info_pictogramas where id='".$_POST["id"]."'";  
      $query_run = $conexion->query($query);  
      $row = $query_run->fetch_array();  
      echo json_encode($row);  
 }  
 ?>

                                                       
