<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

if(isset($_POST['insertdata_uni']))
{
    $clave_producto = $_POST['clave_producto_uni'];
    $unidad_uno = $_POST['insertuni_uno'];
    $unidad_dos = $_POST['insertuni_dos'];
    $unidad_tres = $_POST['insertuni_tres'];
    $unidad_cuatro = $_POST['insertuni_cuatro'];

    /*INSERT A TABLA PICTOGRAMAS*/

    //if (!empty($picto_uno)) {
    $queryInsertUni = "INSERT INTO info_unidades (`clave_producto`,`descripcion_uno`,`descripcion_dos`,`descripcion_tres`,`descripcion_cuatro`) VALUES ('$clave_producto','$unidad_uno','$unidad_dos','$unidad_tres','$unidad_cuatro')";
    $queryInsertUni_run = $conexion->query($queryInsertUni);

    if($queryInsertUni_run)
    {
        //echo '<script> alert("Data Deleted"); </script>';
        header("Location:page_productos.php");
    }
    else
    {
        //echo '<script> alert("Data Not Deleted"); </script>';
    }
    /*} else {
        header("Location:page_productos.php");
    } */
    

    
   
} else {
    //echo '<script> alert("Campos Vacios"); </script>';
    
}

?>