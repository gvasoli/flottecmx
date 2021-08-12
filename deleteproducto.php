<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    

    $select = "SELECT ruta_archivo from productos where clave_producto='$id'";
    $res = $conexion->query($select);
    $var = $res->fetch_row();

    $query = "DELETE FROM productos WHERE clave_producto='$id'";
    $query_run = $conexion->query($query);

    $querySeg = "DELETE FROM info_seguridad WHERE clave_producto='$id'";
    $query_runSeg = $conexion->query($querySeg);

    $queryPicto = "DELETE FROM info_pictogramas WHERE clave_producto='$id'";
    $query_runPicto = $conexion->query($queryPicto);

    $queryUni = "DELETE FROM info_unidades WHERE clave_producto='$id'";
    $query_runUni = $conexion->query($queryUni);

    $queryArch = "DELETE FROM rutas_archivos WHERE clave_producto='$id'";
    $query_runArch = $conexion->query($queryArch);

    $file = $var[0];

    if (!unlink($file)) {  
        //echo ("Error al eliminar archivo");  
    }  
    else {  
        //echo ("Archivo eliminado");  
    }

    if($query_run && $querySeg && $queryPicto && $queryUni && $queryArch)
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
