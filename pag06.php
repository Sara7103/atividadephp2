<?php 

	$senha = $_REQUEST['senha'];
	$nome = $_REQUEST['nome'];

	if ($senha == "etecia238" && $nome == "etecia") {
		echo "Autenticação realizada com sucesso";
	}else{
		echo "Você não tem permissão de visualizar essa página";
	}
//<!-- SARA PERERIRA DE ALCANTARA//KETELIN OLIVEIRA SILVA -->
 ?>