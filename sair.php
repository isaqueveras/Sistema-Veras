<?php
	// Iniciando a sessão
 	session_start();
 	// Destruindo a sessão
 	session_destroy();

 	//Remova todas as informaçoes contidas nas variaveis globais 
 	unset($_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioEmail'],
		$_SESSION['usuarioNivelAcesso'],
		$_SESSION['usuarioCidade'],
		$_SESSION['usuarioSenha'],
		$_SESSION['usuarioCargo'],
		$_SESSION['usuarioImg']);
	
 	// Redireciona o usuario para a pagina de Login
 	header("Location: index.php");
?>