<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

    if(isset($_POST['updatedata_uni']))
    {   
        $id = $_POST['update_id_uni'];
        $clave_producto = $_POST['uclave_producto_uni'];

        $unidad_uno = $_POST['uunidad_uno'];
        $unidad_dos = $_POST['uunidad_dos'];
        $unidad_tres = $_POST['uunidad_tres'];
        $unidad_cuatro = $_POST['uunidad_cuatro'];
    
        $query = "UPDATE info_unidades set clave_producto='$clave_producto',descripcion_uno='$unidad_uno', descripcion_dos='$unidad_dos', descripcion_tres='unidad_tres', descripcion_cuatro='$unidad_cuatro' where id = '$id'";
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