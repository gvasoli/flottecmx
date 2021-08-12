<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    

    $select = "SELECT archivo_html from eventos where clave_evento='$id'";
    $res = $conexion->query($select);
    $var = $res->fetch_row();

    $query = "DELETE FROM eventos WHERE clave_evento='$id'";
    $query_run = $conexion->query($query);

    $queryArch = "DELETE FROM rutas_archivos_eventos WHERE clave_evento='$id'";
    $query_runArch = $conexion->query($queryArch);

    $file = $var[0];

    if (!unlink($file)) {  
        //echo ("Error al eliminar archivo");  
    }  
    else {  
        //echo ("Archivo eliminado");  
    }

    if($query_run)
    {
        //echo '<script> alert("Data Deleted"); </script>';
        header("Location:page_eventos.php");
    }
    else
    {
        //echo '<script> alert("Data Not Deleted"); </script>';
    }
} else {

}

?>
