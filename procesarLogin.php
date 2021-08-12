<?php
require_once "privado/Usuario.php";
require_once "privado/DB.php";


if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
    $conexion = Bd::obtenerConexion();
    $usu = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $usuario = $conexion->query("select usuario, contrasena from usuarios where usuario = '$usu'");

    while($fila = $usuario->fetch_array()){
        $usuarioObtenido = $fila['usuario'];
        $contrasenaObtenida = $fila['contrasena'];
    }

    if(isset($usuarioObtenido)){
        if($usu == $usuarioObtenido && $contrasena == $contrasenaObtenida){
                $usuarioSesion = Usuario::obtenerUsuario($_POST['usuario']);
                $usuarioSesion->iniciarSesion();
                header("location: page_eventos.php");
                echo"Bienvenido";
            }else{
                 header("location: login.php");
                //echo "Contraseña incorrecta";
            }
        }else{
             header("location: login.php");
        //echo "Usuario no registrado";
        }

}else{
     header("location: login.php");
    //echo("Faltan datos");
}
