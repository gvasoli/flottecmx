<?php

  require_once 'privado/DB.php';
  $conexion = Bd::obtenerConexion();

  if (isset($_POST['insertdata_arch'])) {

    $nombre=$_FILES['file_arch']['name'];
    $guardado=$_FILES['file_arch']['tmp_name'];
    $clave_evento = $_POST['clave_evento_arch'];

  if (!file_exists('archivos')) {
    mkdir("archivos",0777,true);
      if (file_exists('archivos')) {
        if (move_uploaded_file($guardado, 'archivos/'.$nombre)) {
          $existe = $conexion->query("select id_ruta_evento from rutas_archivos_eventos where clave_evento='$clave_evento'");
          $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos_eventos (clave_evento,nombre_archivo,ruta_archivo) values ('$clave_evento','".$nombre."','archivos/".$nombre."')";
             $resultado = $conexion->query($sql);
        } else {
          $sql = "update rutas_archivos_eventos set nombre_archivo='".$nombre."', ruta_archivo='archivos/".$nombre."' where clave_evento='$clave_evento'";
             $resultado = $conexion->query($sql);
        }
             
          //echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_eventos.php');
        } else{
          //echo '<script> alert("No se guardaron registros/archivos Hoja de Seguridad"); </script>';
        }
      }
  } else {
    if (move_uploaded_file($guardado, 'archivos/'.$nombre)) {
      $existe = $conexion->query("select id_ruta_evento from rutas_archivos_eventos where clave_evento='$clave_evento'");
        
        $id = $existe->fetch_assoc();
        if (!isset($id)) {
          $sql = "INSERT INTO rutas_archivos_eventos (clave_evento,nombre_archivo,ruta_archivo) values ('$clave_evento','".$nombre."','archivos/".$nombre."')";
             $resultado = $conexion->query($sql);
        } else {
         $sql = "update rutas_archivos_eventos set nombre_archivo='".$nombre."', ruta_archivo='archivos/".$nombre."' where clave_evento='$clave_evento'";
             $resultado = $conexion->query($sql);
        }
          
          //echo '<script> alert("Regitros guardados"); </script>';
            header('Location: page_eventos.php');
        } else{
         // echo '<script> alert("No se guardaron registros/archivos Hoja de Seguridad"); </script>';
        }
    }
  }

 

   


?>