<?php  

require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT a.*,b.nombre_cat FROM productos a 
      left join categorias b on b.clave_cat=a.clave_categoria
      where a.id='".$_POST["id"]."'";  
      $query_run = $conexion->query($query);  
      $row = $query_run->fetch_array();  
      echo json_encode($row);  
 }  
 ?>

                                                       
