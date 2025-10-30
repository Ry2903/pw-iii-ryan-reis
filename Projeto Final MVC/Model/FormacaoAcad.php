<?php
class FormacaoAcademica
{
	private $id;
	private $idusuario;
	private $inicio;
	private $fim;
	private $descricao;

	//ID
	public function setID($id) {
		$this->id = $id;
	}
	public function getID() {
		return $this->id;
	}

	//idusuario
	public function setIdUsuario($idusuario) {
		$this->idusuario = $idusuario;
	}
	public function getIdUsuario() {
		return $this->idusuario;
	}

	//inicio
	public function setInicio($inicio) {
		$this->inicio = $inicio;
	}
	public function getInicio() {
		return $this->inicio;
	}

	//fim
	public function setFim($fim) {
		$this->fim = $fim;
	}
	public function getFim() {
		return $this->fim;
	}

	//descriC'C#o
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	public function getDescricao() {
		return $this->descricao;
	}

	//Inserir no BD
	public function inserirBD() {
		require_once 'ConexaoBD.php';
		$con = new ConexaoBD();
		$conn = $con->conectar();

		if($conn->connect_error) {
			die("Connection failed:" .$conn->connect_error);
		}

		$sql = "INSERT INTO formacaoAcademica (idusuario, inicio, fim, descricao)
		       VALUES ('{$this->idusuario}', '{$this->inicio}', '{$this->fim}', '($this->descricao}')";

		if ($conn->query($sql) === true) {
			$this->id = $conn->insert_id;
			$conn->close();
			return true;
		}
		else {
			$conn->close();
			return false;
		}
	}

	//Excluir do BD
	public function excluirBD($id) {
		require_once 'ConexaoBD.php';
		$con = new ConexaoBD();
		$conn = $con->conectar();

		if ($conn->connect_error) {
			die("Connection failed: " .$conn->connect_error);
		}

		$sql = "DELETE FROM formacaoAcademica WHERE idformacaoAcademica = '{$id}'";

		if($conn->query($sql) === true) {
			$conn->close();
			true;
		}
		else {
			$conn->close();
			return false;
		}
	}

	//Listar formaC'C5es
	public function listaFormacoes($idusuario) {
		require_once 'ConexaoBD.php';
		$con = new ConexaoBD();
		$conn = $con->conectar();

		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM formacaoAcademica WHERE idusuario = '{$idusuario}'";
		$re = $conn->query($sql);
		$conn->close();
		return $re;
	}
}

?>