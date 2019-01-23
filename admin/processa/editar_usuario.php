<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");

	$id        = $_GET['id'];
	$nome      = $_POST["nome"];
	$senha     = $_POST["senha"];
	$email     = $_POST["email"];
	$cargo 	   = $_POST["cargo"];
	$cidade    = $_POST["cidade"];

	$query = mysql_query("UPDATE usuarios SET nome='$nome',email='$email',cidade='$cidade',cargo='$cargo',senha='$senha',modified=NOW() WHERE id='$id'");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Atualizando usuário...</title>
</head>
<body>
	<?php
		if (mysql_affected_rows() != 0 ):	
			$_SESSION['proc'] = "Usúario $nome editado com sucesso."; 	
			header("Location: ../index.php?pg=3"); 		   
		else:
			$_SESSION['proc'] = "Não foi posivel editar o usúario."; 	
			header("Location: ../index.php?pg=3");  
		endif; ?>
</body>
</html>