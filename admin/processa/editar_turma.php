<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");
	
	$id      = $_POST['id'];
	$nome    = $_POST["nome"];
	$pre     = $_POST["pre"];
	$audio   = $_POST["audio"];
	$cor     = $_POST['cor'];

	$query = mysql_query("UPDATE cursos SET nome='$nome',pre='$pre',audio='$audio',cor='$cor',modified=NOW() WHERE id='$id' ");
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
						alert(\"Curso editado com Sucesso.\");
					</script>
				";		   
			}else{ 	
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/veras/admin/turma.php?curso=2'>
					<script type=\"text/javascript\">
						alert(\"Não foi possivel editar.\");
					</script>
				";	} ?>
	</body>
</html>