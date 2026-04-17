<?php
require "Usuario.class.php";
$usuario = new Usuario ();

$conn - $usuario->conectar ();

if ( $conn ){
    $user = $usuario->inserirUsuario("Gustavo Tavares")
}