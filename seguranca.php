<?php 
	ob_start();
	// Verifica se as sessões estão em branco, se os dados estiver em branco as sessões será quebrado
	if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usuarioEmail'] == "") || ($_SESSION['usuarioSenha'] == "")){
		// Quebrando as sessões
		unset(
			$_SESSION['usuarioId'],
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