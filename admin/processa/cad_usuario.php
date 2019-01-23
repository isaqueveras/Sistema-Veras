<?php
	session_start();
	include_once("../../seguranca.php");
	include_once("../../conexao.php");
	
	$nome      = $_POST["nome"];
	$senha     = $_POST["senha"];
	$email     = $_POST["email"];
	$cargo 	   = $_POST["cargo"];
	$cidade    = $_POST["cidade"];

	$query = mysql_query("INSERT INTO usuarios (nome,email,senha,nivel_acesso_id,cargo,cidade,created) VALUES('$nome','$email','$senha','ADM',$cargo,$cidade,NOW())");
	
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
	</head>
	<body>
		<?php
		if (mysql_affected_rows() != 0){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/veras/admin/index.php?pg=3'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com Sucesso.\");
				</script>
			";		   
		}else{	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/veras/admin/index.php?pg=4'>
				<script type=\"text/javascript\">
					alert(\"Não foi possivel cadastrar o usuário.\");
				</script>
			"; } ?>
	</body>
</html>