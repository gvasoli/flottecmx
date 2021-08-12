<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $select = "SELECT ruta_archivo from categorias where id='$id'";
    $res = $conexion->query($select);
    $var = $res->fetch_row();

    $query = "DELETE FROM categorias WHERE id='$id'";
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
        header("Location:page_categorias.php");
    }
    else
    {
        //echo '<script> alert("Data Not Deleted"); </script>';
    }
} else {

}

?>
