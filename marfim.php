<?php
	require_once("prata.php");

	$obj01 = new tumbas();
	$obj02 = new tumbas();

	$cod_tumba = $_GET['cod_tumba'];
    $msg_tumba = $_GET['msg_tumba'];
    $setor = $_GET['setor'];
	$visitas = $_GET['visitas'];

	$obj01->setCodTumba($cod_tumba);
	$obj01->setMsgTumba($msg_tumba);
	$obj01->setSetor($setor);
	$obj01->setVisitas($visitas);

	$cod_tumba = $obj01->getCodTumba();
	$msg_tumba = $obj01->getMsgTumba();
	$setor = $obj01->getSetor();
	$visitas = $obj01->getVisitas();
	echo "Código = $cod_tumba | Epitáfio = $msg_tumba | Setor = $setor | Visitas = $visitas <Br>";
	echo "<br><hr><a href='golden.html'>VOLTAR</A>"; 	
?>