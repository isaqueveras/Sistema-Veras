<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");
	
	$id 	  = $_SESSION["usuarioId"];
	$nome 	  = $_POST["nome"];
	$senha 	  = $_POST["senha"];
	$cargo 	  = $_POST["cargo"];
	$cidade   = $_POST["cidade"];
	$email 	  = $_POST["email"];

	$query = mysql_query("UPDATE usuarios SET nome = '$nome',email = '$email',senha = '$senha',cargo = '$cargo',cidade = '$cidade',modified = NOW() WHERE id = '$id' ");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>
	<body>
		<?php
			if (mysql_affected_rows() != 0 ){	
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/veras/admin/index.php?pg=5'>
					<script type=\"text/javascript\"> alert(\"Perfil editado com Sucesso.\"); </script> ";		   
			}else{ 	
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/veras/admin/index.php?pg=5'>
					<script type=\"text/javascript\"> alert(\"Perfil não foi editado.\"); </script> ";		   
			}
		?>
	</body>
</html>