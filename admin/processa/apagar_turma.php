<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");
	
	$id = $_GET["id"];
	$query = mysql_query("DELETE FROM cursos WHERE id='$id' ");

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/veras/admin/turma.php?curso=2'>
				<script type=\"text/javascript\">
					alert(\"O Curso foi apagado com sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/veras/admin/turma.php?curso=2'>
				<script type=\"text/javascript\">
					alert(\"O Curso não foi apagado.\");
				</script>
			";		   

		}

		?>
	</body>
</html>