<?php
class Usuario {
    private $id;     
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function conectar () {
        try {
            $dns = "mysql:dbname=usuarioMtec;host=localhost";
            $dbUser = "root";
            $dbpass = "";
            $this->pdo = new PDO($dns, $dbUser, $dbpass);
            return true;
        } catch (Throwable $th) {
            echo "Problema: $th";
            return false;
        }
    }

    function inserirUsuario($nome, $email, $senha) {
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";
        
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":s", $senha);
        $stmt->bindValue(":e", $email);

        return $stmt->execute();
    }
}
?>