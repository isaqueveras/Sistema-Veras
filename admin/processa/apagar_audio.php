<?php  
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");

	$id = $_GET['id'];

	$query = "DELETE FROM audio WHERE id='$id' ";
	$resultado = mysql_query($query);
	$linhas = mysql_affected_rows();

	if (mysql_affected_rows() != 0):
		$_SESSION['proc'] = "O audio foi apagado com sucesso.";
		header("Location: ../index.php?pg=13");	   
	else:
		$_SESSION['proc'] = "Não foi posivel apagar o audio.";
		header("Location: ../index.php?pg=13");	 	   
	endif;
?>