<?php
require_once "../Model/ConexaoBD.php";
require_once "../Model/FormacaoAcademica.php";

if (isset($_POST['btnAddFormacao'])) {

    $idusuario = $_POST['idusuario'];
    $instituicao = $_POST['txtInstituicao'];
    $curso = $_POST['txtCurso'];
    $anoInicio = $_POST['txtAnoInicio'];
    $anoFim = $_POST['txtAnoFim'];

    $f = new FormacaoAcademica();
    $f->setIdUsuario($idusuario);
    $f->setInstituicao($instituicao);
    $f->setCurso($curso);
    $f->setAnoInicio($anoInicio);
    $f->setAnoFim($anoFim);

    if ($f->inserir()) {
        header("Location: ../View/informacaoInserida.php");
    } else {
        header("Location: ../View/operacaoNaoRealizada.php");
    }
}

if (isset($_GET['excluir'])) {

    $id = $_GET['excluir'];
    $f = new FormacaoAcademica();
    $f->setIdFormacao($id);

    if ($f->excluir()) {
        header("Location: ../View/informacaoExcluida.php");
    } else {
        header("Location: ../View/operacaoNaoRealizada.php");
    }
}
