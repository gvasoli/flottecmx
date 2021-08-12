<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

if(isset($_POST['insertdata_picto']))
{
    $clave_producto = $_POST['clave_producto_picto'];
    $picto_uno = $_POST['insertpicto_uno'];

    /*INSERT A TABLA PICTOGRAMAS*/

    if (!empty($picto_uno)) {
    $queryInsertPicto = "INSERT INTO info_pictogramas (`clave_producto`,`ruta_pictograma`) VALUES ('$clave_producto','$picto_uno')";
    $queryInsertPicto_run = $conexion->query($queryInsertPicto);

    if($queryInsertPicto_run)
    {
        //echo '<script> alert("Data Deleted"); </script>';
        header("Location:page_productos.php");
    }
    else
    {
        //echo '<script> alert("Data Not Deleted"); </script>';
    }
    } else {
        header("Location:page_productos.php");
    } 
    

    
   
} else {
    //echo '<script> alert("Campos Vacios"); </script>';
    
}

?>