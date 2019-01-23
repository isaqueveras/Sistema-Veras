<?php
	// Iniciando uma sessão
	session_start();
	// recebendo os dados do formulario
	$email   = addslashes($_POST['email']);
	$senha   = addslashes($_POST['senha']);
	// Incluindo o arquivo de conexao do Banco de Dados
	include_once('conexao.php');

	// Verifica se os dados são iguais a do formulario
	$result = mysql_query("SELECT * FROM usuarios WHERE email='{$email}' AND senha='{$senha}' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
	
	// Estrutura de decisão dos campos vazios
	if(empty($resultado)):
		// Mensagem de Erro - E-mail ou senha Inválido
		$_SESSION['loginErro'] = "E-mail ou Senha Inválido";

		// Redireciona o usúario para a tela de login
		header("Location: index.php");
	else:
		// Criando a sessão do usuario
		$_SESSION['usuarioId']			= $resultado['id'];
		$_SESSION['usuarioNome']		= $resultado['nome'];
		$_SESSION['usuarioEmail']       = $resultado['email'];
		$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
		$_SESSION['usuarioCidade']		= $resultado['cidade'];
		$_SESSION['usuarioSenha']       = $resultado['senha'];
		$_SESSION['usuarioCargo']       = $resultado['cargo'];
		$_SESSION['usuarioImg']         = $resultado['img'];

		// Verifica se o usuário é administrador ou não
		if($_SESSION['usuarioNivelAcesso'] == "ADM"):
			// Redireciona o usúario para a àrea de trabalho
			header("Location: admin/");
		else:
			// Redireciona o usúario para a tela de login
			header("Location: index.php");
		endif;

	endif;
?>