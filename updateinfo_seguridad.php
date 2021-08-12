<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

    if(isset($_POST['updatedata_seguridad']))
    {   
        $id = $_POST['update_id_seg'];
        
        $clave_producto = $_POST['uclave_producto_seg'];
        $edo_fisico = $_POST['uedo_fisico'];
        $color = $_POST['ucolor'];
        $densidad = $_POST['udensidad'];
        $inflamabilidad = $_POST['uinflamabilidad'];
        $ries_transporte = $_POST['uries_transporte'];
        $riesgos = $_POST['uriesgos'];
        $codigo_un = $_POST['ucodigo_un'];
        $ph =  $_POST['uph'];

        /*$nombreArchivoConvert = strtr($nombre_categoria, " ", "_");
        $str = strtolower("categorias/".$nombreArchivoConvert.".php");
        $carpeta = strtolower($nombreArchivoConvert);*/


        /*$select = "SELECT clave_cat from categorias where nombre_cat='$categoria'";
        $res = $conexion->query($select);
        $var = $res->fetch_row();

        $cat = $var[0];
       
        //if ($titulo_evento!=$var[0]) {
            //$contenido = "";

        file_put_contents($str, $contenido);
        if (!unlink($file)) {  
            echo ("Error al eliminar archivo");  
        }  
        else {  
            echo ("Archivo eliminado");  
        }
        //$carpeta = ''.$nombreArchivoConvert.'';
        /*if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
        }*/

        $query = "UPDATE info_seguridad SET clave_producto='$clave_producto', edo_fisico='$edo_fisico',color='$color', densidad='$densidad', inflamabilidad='$inflamabilidad', ph='$ph', ries_transporte='$ries_transporte', riesgos='$riesgos', codigo_un='$codigo_un' WHERE id_info='$id'";
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