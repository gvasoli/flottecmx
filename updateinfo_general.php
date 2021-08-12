<?php
require_once 'privado/DB.php';
$conexion = Bd::obtenerConexion();

    if(isset($_POST['updatedata_general']))
    {   
        $id = $_POST['update_id'];
        
        $categoria = $_POST['ucategoria'];
        $clave_producto = $_POST['uclave_producto'];
        $nombre = $_POST['unombre'];
        $clasificacion = $_POST['uclasificacion'];
        $fam_quimica = $_POST['ufam_quimica'];
        $descripcion = $_POST['udescripcion'];
        $imagen = $_POST['uimg_principal'];
        $uso = $_POST['uuso'];
        /*$nombreArchivoConvert = strtr($nombre_categoria, " ", "_");
        $str = strtolower("categorias/".$nombreArchivoConvert.".php");
        $carpeta = strtolower($nombreArchivoConvert);*/


        $select = "SELECT clave_cat from categorias where nombre_cat='$categoria'";
        $res = $conexion->query($select);
        $var = $res->fetch_row();

        $cat = $var[0];
       
        //if ($titulo_evento!=$var[0]) {
            //$contenido = "";

        /*file_put_contents($str, $contenido);
        if (!unlink($file)) {  
            //echo ("Error al eliminar archivo");  
        }  
        else {  
            //echo ("Archivo eliminado");  
        }*/
        //$carpeta = ''.$nombreArchivoConvert.'';
        /*if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
        }*/

        $query = "UPDATE productos SET clave_producto='$clave_producto', clave_categoria='$cat',clasificacion='$clasificacion', nombre='$nombre', fam_quimica='$fam_quimica', uso='$uso', des_general='$descripcion', img_principal='$imagen' WHERE id='$id'";
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