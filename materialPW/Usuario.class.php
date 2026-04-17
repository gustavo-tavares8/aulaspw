<?php
class Usuario{
    private $id;     
    private $nome;
    private $email;

    private $senha;
    private $pdo;



    function conectar () {
        try {
            $dns = "mysql:dbname=usuarioMtec;host=localhost";
            $dbuser = "root";
            $dbpass = "";
            $this->pdo = new PDO($dns, $dbuser, $dbpass);
            return true;
        } catch (/Throwable $th) {
            echo "Problema: $th";
            return false;

        }
    }
    function inserirUsuario($email, $nome, $senha) {
        #passo 1- criar uma variavel com a consulta 
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s"
        
        #PASSO 2 - passar para o metodo prepare essa consulta
        $stmt = $this ->pdo->prepare("sql");

        #PASSO 3 - para cada apelido, usar o metodo blindvalue
        $stmt->blindvalue(":n", $nome);
        $stmt->blindvalue(":s", $senha);
        $stmt->blindvalue("e", $email);

        #PASSO 4 - executar o comando
        return $stmt->execute();
    }
}
?>