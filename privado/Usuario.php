<?php
require_once "DB.php";

class Usuario
{

    const EXITO = 1;
    const ERROR = -1;
    const CORREO_DUPLICADO = -2;

    public $id;
    public $usuario;

    private function __construct()
    { }


    public static function obtenerUsuario($correo)
    {

        $usuario = new Usuario;

        $sql = "SELECT id_usuario,usuario FROM usuarios WHERE usuario=?";
        //echo($correo);
        $conexion = Bd::obtenerConexion();

        $stmt = $conexion->prepare($sql);

        $stmt->bind_param("s",$correo);
        $stmt->bind_result(
            $usuario->id,
            $usuario->usuario
        );
        $stmt->execute();
        $huboUsuario = $stmt->fetch();
        $stmt->close();
        if (!$huboUsuario) {
            return self::ERROR;
        } else {
            return $usuario;
        }
    }

    public function iniciarSesion(){
        if(session_status() != PHP_SESSION_ACTIVE)
            session_start();
        $_SESSION["id"] = $this->id;
        $_SESSION["usuario"] = $this->usuario;
    }

    public static function logout(){
        if(session_status() != PHP_SESSION_ACTIVE)
            session_start();
        unset($_SESSION["id"]);
        unset($_SESSION["usuario"]);

        session_destroy();
    }
}
