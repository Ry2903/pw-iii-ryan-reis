<?php
class ExperienciaProfissional
{
	private $id;
	private $idusuario;
	private $inicio;
	private $fim;
	private $empresa;
	private $descricao;
// ID
	public function setID($id) {
		$this->id = $id;
	}
	public function getID() {
		return $this->id;
	}
// idusuario
	public function setIdUsuario($idusuario) {
		$this->idusuario = $idusuario;
	}
	public function getIdUsuario() {
		return $this->idusuario;
	}
// inicio
	public function setInicio($inicio) {
		return $this->inicio;
	}
// fim
	public function setFim($fim) {
		$this->fim = $fim;
	}
	public function getFim() {
		return $this->fim;
	}
// empresa
	public function setEmpresa($empresa) {
		$this->empresa = $empresa;
	}
	public function getEmpresa() {
		return $this->empresa;
	}
// descriC'C#o
	public function setDescricao($descricao) {
		return $this->descricao;
	}
// Inserir no BD
	public function inserirBD() {
		require_once 'ConexaoBD.php';
		$con = new ConexaoBD();
		$conn = $con->conectar();
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO experienciaProfissional (idusuario, inicio, fim, empresa, descricao)
		       VALUES ('{$this->idusuario}', '{$this->inicio}', '{$this->fim}', '{$this->empresa}', ' {$this->descricao}')";
	if ($conn->query($sql) === true) {

		$this->id = $conn->insert_id;
		$conn->close();
		return true;
	} else {
		$conn->close();
		return false;
	}
}
// Listar experiC*ncias
public function listaExperiencias($idusuario) {
	require_once 'ConexaoBD.php';
	$con = new ConexaoBD();
	$conn = $con->conectar();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM experienciaProfissional WHERE idusuario = '{$idusuario}'";
	$re = $conn->query($sql);
	$conn->close();
	return $re;
}
}
?>