<?php

  require_once 'privado/DB.php';
  $conexion = Bd::obtenerConexion();

  if (isset($_POST['insertdata_arch'])) {

    $nombre=$_FILES['file_arch']['name'];
    $guardado=$_FILES['file_arch']['tmp_name'];
    $clave_producto = $_POST['clave_producto_arch'];
    $tipo_archivo = $_POST['tipo_archivo_arch'];

  if (!file_exists('archivos')) {
    mkdir("archivos",0777,true);
      if (file_exists('archivos')) {
        if (move_uploaded_file($guardado, 'archivos/'.$nombre)) {
          $existe = $conexion->query("select clave_producto from rutas_archivos where tipo_archivo='$tipo_archivo' and clave_producto='$clave_producto'");
          $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos (clave_producto,nombre_archivo,tipo_archivo,ruta_archivo) values ('$clave_producto','".$nombre."','$tipo_archivo','archivos/".$nombre."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos set nombre_archivo='".$nombre."', ruta_archivo='archivos/".$nombre."' where clave_producto='$clave_producto' and tipo_archivo='$tipo_archivo'";
             $resultado = $conexion->query($sql);
        }
             
          echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_productos.php');
        } else{
          echo '<script> alert("No se guardaron registros/archivos Hoja de Seguridad"); </script>';
        }
      }
  } else {
    if (move_uploaded_file($guardado, 'archivos/'.$nombre)) {
      $existe = $conexion->query("select clave_producto from rutas_archivos where tipo_archivo='$tipo_archivo' and clave_producto='$clave_producto'");
        
        $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos (clave_producto,nombre_archivo,tipo_archivo,ruta_archivo) values ('$clave_producto','".$nombre."','$tipo_archivo','archivos/".$nombre."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos set nombre_archivo='".$nombre."', ruta_archivo='archivos/".$nombre."' where clave_producto='$clave_producto' and tipo_archivo='$tipo_archivo'";
             $resultado = $conexion->query($sql);
        }
          
          echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_productos.php');
        } else{
          echo '<script> alert("No se guardaron registros/archivos Hoja de Seguridad"); </script>';
        }
    }
  }

 

   


?>