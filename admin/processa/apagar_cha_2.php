<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");
	$id = $_GET['id'];
	$query = "DELETE FROM fevereiro WHERE id='$id' ";
	$resultado = mysql_query($query);
	$linhas = mysql_affected_rows();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
    	<meta charset="UTF-8">
	</head>
	<body>
		<?php
			if(mysql_affected_rows() != 0):
				$_SESSION['proc'] = "Apagado com sucesso!";
				header("Location: ../mes.php?mes=14");		   
			else:
				$_SESSION['proc'] = "Falha ao apagar!";
				header("Location: ../mes.php?mes=14"); 
			endif; 
		?>
	</body>
</html>