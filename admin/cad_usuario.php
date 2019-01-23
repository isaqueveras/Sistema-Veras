<?php
	session_start();  
	include_once("include/conexao_audio.php");
	include_once("seguranca.php");
	
	$msg = false;

	if (isset($_FILES['info']))
		
		$extensao = strtolower(substr($_FILES['info']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "imagens/";

		move_uploaded_file($_FILES['info']['tmp_name'], $diretorio.$novo_nome);

		$nome      = $_POST["nome"];
		$senha     = $_POST["senha_usu"];
		$email     = $_POST["email_usu"];
		$cargo 	   = $_POST["cargo"];
		$cidade    = $_POST["cidade"];

		if (($nome == "") || ($senha == "") || ($email == "") || ($cargo == "") || ($cidade == ""))  {
			// Em construção
		}

		$sql_code = "INSERT INTO usuarios (id,nome,email,senha,nivel_acesso_id,cargo,cidade,img,created) VALUES(null,'$nome','$email','$senha','ADM','$cargo','$cidade','$novo_nome',NOW())";

		if ($mysql->query($sql_code))
			$msg = "Usuário Cadastrado com sucesso";
		else
			$msg = "Falha ao Cadastrar o usúario";
?>
<style type="text/css">
	.margin{
		margin: 5px;
	}
</style>
<main class="app-content">
<div class="clearfix"></div>
	<div class="tile">
		<?php 
			if($msg != false)
				echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
						<strong>Notificação: </strong> $msg
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
					  </div>";
		?>
		<h3 class="tile-title"><i class="icon fa fa-user-plus"> </i> Cadastrar Usuário</h3>
		<form action="index.php?pg=4" method="POST" enctype="multipart/form-data">
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="nome">Nome</label>
		      <input name="nome" type="text" class="form-control" id="nome" placeholder="Informe o Nome.." required>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="senha">Senha</label>
		      <input name="senha_usu" type="password" class="form-control" id="senha" placeholder="Informe a senha.." required>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="cargo">Cargo</label>
		      <input name="cargo" type="text" class="form-control" id="cargo" placeholder="Informe o cargo.." required>
		    </div>
		    <div class="form-group col-md-7">
		      <label for="email">E-mail</label>
		      <input name="email_usu" type="email" class="form-control" id="email" placeholder="Informe o E-mail.." required>
		    </div>
		    

		    <div class="form-group col-md-5">
		      <label for="cidade">Cidade</label>
		      <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Informe a Cidade.." required>
		    </div>
		    <div class="form-group col-md-3">
		      	<label class="btn btn-outline-primary">
			    	Imagem do Perfil <input type="file" style="display: none;" class="form-control" name="info" required>
				</label>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-outline-info margin"><i class="icon fa fa-user-plus"> </i> Cadastrar Usuário</button>
		  <button type="reset" class="btn btn-outline-danger margin"><i class="icon fa fa-trash"> </i> Limpar Campo</button>
		</form>
    </div>
</main>
<?php include_once("include/footer.php"); ?>