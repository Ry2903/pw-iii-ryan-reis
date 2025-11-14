<?php
require_once "../Model/ConexaoBD.php";
require_once "../Model/ExperienciaProfissional.php";

if (isset($_POST['btnAddEP'])) {

    $idusuario = $_POST['idusuario'];
    $dtInicio = $_POST['txtInicioEP'];
    $dtFim = $_POST['txtFimEP'];
    $empresa = $_POST['txtEmpEP'];
    $descricao = $_POST['txtDescEP'];

    $ep = new ExperienciaProfissional();
    $ep->setIdUsuario($idusuario);
    $ep->setDtInicio($dtInicio);
    $ep->setDtFim($dtFim);
    $ep->setEmpresa($empresa);
    $ep->setDescricao($descricao);

    if ($ep->inserir()) {
        header("Location: ../View/informacaoInserida.php");
    } else {
        header("Location: ../View/operacaoNaoRealizada.php");
    }
}

if (isset($_GET['excluir'])) {

    $id = $_GET['excluir'];
    $ep = new ExperienciaProfissional();
    $ep->setIdExperiencia($id);

    if ($ep->excluir()) {
        header("Location: ../View/informacaoExcluida.php");
    } else {
        header("Location: ../View/operacaoNaoRealizada.php");
    }
}
