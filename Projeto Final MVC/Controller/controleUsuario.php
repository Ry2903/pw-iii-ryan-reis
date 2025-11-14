<?php
require_once "../Model/ConexaoBD.php";
require_once "../Model/Usuario.php";

if (isset($_POST['btnAtualizarUsuario'])) {

    $id = $_POST['idusuario'];
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $cpf = $_POST['txtCPF'];
    $dataNasc = $_POST['txtDataNasc'];

    $usuario = new Usuario();
    $usuario->setIdUsuario($id);
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setCpf($cpf);
    $usuario->setDataNascimento($dataNasc);

    if ($usuario->atualizar()) {
        header("Location: ../View/atualizacaoRealizada.php");
    } else {
        header("Location: ../View/operacaoNaoRealizada.php");
    }
}
