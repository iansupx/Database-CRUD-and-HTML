<?php
class finados {

private $id_falecido = 0;
private $nome_falecido = "Sem Nome";
private $data_nascimento = "0000-00-00";
private $data_obito = "0000-00-00";

public function setIdFalecido ( $novoID ) {
$this->id_falecido = $novoID;
	}
public function setNomeFalecido ( $novoNome ) {
$this->nome_falecido = $novoNome;
	}
public function setDataNascimento ( $novoNascimento ) {
$this->data_nascimento = $novoNascimento;
	}
public function setDataObito ( $novoDataObito ) {
$this->data_obito = $novoDataObito;
	}
public function getIdFalecido () {
return $this->id_falecido;
}
public function getNomeFalecido () {
return $this->nome_falecido;
	}
public function getDataNascimento () {
return $this->data_nascimento;
	}
public function getDataObito () {
return $this->data_nascimento;
	}
}
?>