<?php
require_once "privado/Usuario.php";
session_start();
if(isset($_SESSION['usuario'])){
    header("location: page_eventos.php");
    exit;
}
?>
<html>
    <head>
        <link href="toastr/build/toastr.css" rel="stylesheet"/>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bulma-0.9.0/css/bulma.css">
        <title>Iniciar sesion</title>
    </head>
<body style="display: flex; justify-content: center; align-items: center;">
    <div>
        <div id = "sesion" style="background-color: white; text-align: center; width: 300px; height: 300px;">
            <form action="procesarLogin.php" method="post">
                <a href="index.php"><img src="assets/img/logoflottec.png"></a>
                <label class="label">Usuario</label>
                <input class="input" id="usuario" name="usuario" placeholder="Usuario" style="width:200px;"><br>
                <label class="label">Contraseña</label>
                <input  class="input"type="password" id="contrasena" name="contrasena" placeholder="Contraseña" style="width: 200px;"><br><br>
                <button class="button is-link" id='ingresar'>Iniciar sesion</button>
            </form>
        </div>
    </div>

    <script src="toastr/build/toastr.min.js"></script>

    <script>
        /*$('#ingresar').click(function(){
            usuario = document.getElementById('usuario').value;
            contrasena = document.getElementById("contrasena").value;
            console.log(contrasena);
            console.log(usuario);
            if(usuario.trim() == "" || contrasena.trim() == ""){
                toastr.error("Ingrese todos los datos");
            }else{
                $.post("procesarLogin.php", {
                    usuario:usuario,
                    contrasena,contrasena
                }, function(data, status) {
                        if(data == 'Contraseña incorrecta' || data == 'Usuario no registrado' || data =='Faltan datos'){
                            toastr.error(data);
                        }      
                });
            }
        });*/
    </script>
</body>
</html> 