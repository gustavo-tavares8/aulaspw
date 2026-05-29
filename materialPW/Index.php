<?php
require "Usuario.class.php";
$usuario =  new Usuario();

$conn = $usuario->conecta();
if ($conn) {
    $user = $usuario->inserirUsuario ("gusta", "gusta2121@gmail.com", "euvoumataropr");
    if ($user) {
        echo "Usuario inserido com sucesso";
    }else{ 
        echo "Erro ao inserir usuario";
    }

}else{
    echo "Banco de dados indisponivel tente novamente seu betinha";
}