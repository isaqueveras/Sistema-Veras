<?php 
	ob_start();
	if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usuarioEmail'] == "") || ($_SESSION['usuarioSenha'] == "") || ($_SESSION['usuarioCargo'] == "") || ($_SESSION['usuarioImg'] == "")){
		
		unset($_SESSION['usuarioId'],
			$_SESSION['usuarioNome'],
			$_SESSION['usuarioEmail'],
			$_SESSION['usuarioNivelAcesso'],
			$_SESSION['usuarioCidade'],
			$_SESSION['usuarioSenha'],
			$_SESSION['usuarioCargo'],
			$_SESSION['usuarioImg']
		);
		 
		// Mensagem de erro
		$_SESSION['loginErro'] = "Acesso Inválido - Área Restrita";	

		//manda o usuario para a tela de loginErro
		header("Location: ../index.php");
	}
 ?>