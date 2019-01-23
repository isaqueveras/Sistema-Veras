<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");
	$id = $_GET['id'];
	$query = "DELETE FROM julho WHERE id='$id' ";
	$resultado = mysql_query($query);
	$linhas = mysql_affected_rows();

	if (mysql_affected_rows() != 0):
		$_SESSION['proc'] = "Apagado com sucesso!";
		header("Location: ../mes.php?mes=19");		   
	else:
		$_SESSION['proc'] = "Falha ao apagar!";
		header("Location: ../mes.php?mes=19"); 
	endif; 
?>