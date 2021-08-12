<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

if(isset($_POST['deletedata_arch']))
{
    $id = $_POST['delete_id_arch'];

    $select = "SELECT ruta_archivo from rutas_archivos where id_ruta='$id'";
    $res = $conexion->query($select);
    $var = $res->fetch_row();

    $query = "DELETE FROM rutas_archivos WHERE id_ruta='$id'";
    $query_run = $conexion->query($query);

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
        header("Location:page_productos.php");
    }
    else
    {
        //echo '<script> alert("Data Not Deleted"); </script>';
    }
} else {

}

?>
