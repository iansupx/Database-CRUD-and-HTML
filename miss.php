<?php
	require_once("sulphuria.php");

	$obj01 = new Finados();
	$obj02 = new Finados();

	$id_falecido = $_GET['id_falecido'];
    $nome_falecido = $_GET['nome_falecido'];
    $data_nascimento = $_GET['data_nascimento'];
	$data_obito = $_GET['data_obito'];

	$obj01->setIdFalecido($id_falecido);
	$obj01->setNomeFalecido($nome_falecido);
	$obj01->setDataNascimento($data_nascimento);
	$obj01->setDataObito($data_obito);

	$id_falecido = $obj01->getIdFalecido();
	$data_nascimento = $obj01->getDataNascimento();
	$nome_falecido = $obj01->getNomeFalecido();
	$data_obito = $obj01->getDataObito();
	echo "ID= $id_falecido | Nome = $nome_falecido | Nascimento= $data_nascimento | Óbito = $data_obito <Br>";
	echo "<br><hr><a href='golden.html'>VOLTAR</A>"; 	
?>