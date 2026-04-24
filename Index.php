<?php
require "Usuario.class.php";
$usuario =  new Usuario ();

$conn = $usuario->conectar ();
if ($conn) {
    $user = $usuario->inserirUsuario ("Gustavos", "Gustavo3@gmail.com", "7777");
    if ($user) {
        echo"";"Usuario inserido com sucesso";
    }else{ 
        echo "Erro ao inserir usuario";
    }

}else{
    echo "Banco de dados indisponivel tente novamente seu betinha";
}