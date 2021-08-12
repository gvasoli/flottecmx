<?php
require_once "privado/Usuario.php";

Usuario::logout();
header("location: login.php");

?>
