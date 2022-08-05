<?php
class tumbas {

private $cod_tumba = 0;
private $msg_tumba = "Sem Mensagens";
private $setor = "0";
private $visitas = "0";

public function setCodTumba ( $novoCOD) {
$this->cod_tumba = $novoCOD;
	}
public function setMsgTumba ( $novoMSG){
$this->msg_tumba = $novoMSG;
	}
public function setSetor ( $novoSetor ){
$this->setor = $novoSetor;
	}
public function setVisitas ( $novasVisitas ) {
$this->visitas = $novasVisitas;
	}
public function getCodTumba () {
return $this->cod_tumba;
}
public function getMsgTumba () {
return $this->msg_tumba;
	}
public function getSetor () {
return $this->setor;
	}
public function getVisitas () {
return $this->visitas;
	}
}
?>

