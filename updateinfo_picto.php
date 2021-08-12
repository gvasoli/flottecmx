<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

    if(isset($_POST['updatedata_picto']))
    {   
        $id = $_POST['update_id_picto'];
        
        $clave_producto = $_POST['uclave_producto_picto'];
        $pictograma = $_POST['upictograma'];

        $query = "UPDATE info_pictogramas set clave_producto='$clave_producto', ruta_pictograma='$pictograma' where id = '$id'";
        $query_run = $conexion->query($query);

        if($query_run)
        {
            //echo '<script> alert("Data Updated"); </script>';
            header("Location:page_productos.php");
        }
        else
        {
            //echo '<script> alert("Data Not Updated"); </script>';
        }
    //}
}
?>