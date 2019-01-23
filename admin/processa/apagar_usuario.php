<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");
	$id = $_GET['id'];
	$query = "DELETE FROM usuarios WHERE id='$id' ";
	$resultado = mysql_query($query);
	$linhas = mysql_affected_rows();

	if (mysql_affected_rows() != 0):
		$_SESSION['proc'] = "Usúario apagado com sucesso!";
		header("Location: ../index.php?pg=3");		   
	else:
		$_SESSION['proc'] = "Falha ao apagar o usúario!";
		header("Location: ../index.php?pg=3"); 
	endif; 
?>