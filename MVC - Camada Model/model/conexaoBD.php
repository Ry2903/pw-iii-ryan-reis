<?php
class ConexaoBD {
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "projeto_final";

    public function conectar() {
        // Cria a conexão
        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);

        // Verifica se houve erro na conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
        
        // Mensagem de sucesso
        echo "Conexão realizada com sucesso!";
        return $conn;
     }
}
//Aqui você instancia a classe e chama o método
$conexao = new ConexaoBD();
$conexao->conectar();
?>