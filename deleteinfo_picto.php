<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

if(isset($_POST['deletedata_picto']))
{
    $id = $_POST['delete_id_picto'];

    /*$select = "SELECT archivo_html from eventos where evento_id='$id'";
    $res = $conexion->query($select);
    $var = $res->fetch_row();*/

    $query = "DELETE FROM info_pictogramas WHERE id='$id'";
    $query_run = $conexion->query($query);

    /*$file = $var[0];

    if (!unlink($file)) {  
        echo ("Error al eliminar archivo");  
    }  
    else {  
        echo ("Archivo eliminado");  
    }*/

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
