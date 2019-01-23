<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");

	$nome    = $_POST["nome_sala"];
	$pre     = $_POST["pre_sala"];
	$audio   = $_POST["audio_sala"];
	$cor     = $_POST['cor_sala'];

	$query = mysql_query("INSERT INTO cursos (nome,pre,audio,cor,created) VALUES('$nome','$pre','$audio','$cor',NOW())");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
    	<meta charset="UTF-8">
	</head>
	<body>
		<?php
			if (mysql_affected_rows() != 0):	
				$_SESSION['proc'] = "Sala cadastrado com Sucesso.";
				header("Location: ../turma.php?curso=2");		   
			else:	
				$_SESSION['proc'] = "Não foi posivel cadastrar a Sala.";
				header("Location: ../turma.php?curso=2"); 
			endif; 
		?>
	</body>
</html>