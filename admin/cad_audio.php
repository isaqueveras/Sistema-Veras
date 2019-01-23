<?php
	session_start();
	include_once("seguranca.php");
	include_once("include/conexao_audio.php");
	include_once("include/aside.php");

	$msg = false;

	if (isset($_FILES['info'])) {
		
		$extensao = strtolower(substr($_FILES['info']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "audios/";

		move_uploaded_file($_FILES['info']['tmp_name'], $diretorio.$novo_nome);

		$nome = $_POST['nome'];
		$cor  = $_POST['cor'];
		$pre  = $_POST['pre'];

		$sql_code = "INSERT INTO audio (id,nome,arquivo,cor,pre,data) VALUES (null,'$nome','$novo_nome','$cor','$pre',NOW())";
		if ($mysql->query($sql_code)){
			$msg = "Audio Enviado com sucesso";
		}else{
			$msg = "Falha ao enviar o Audio";
		}

	}
?>
<main class="app-content">
<div class="clearfix"></div>
    <div class="tile">
    	<h3 class="tile-title"><i class="icon fa fa-music"></i> Cadastrar Audio <!-- <a href="index.php?pg=13"><button class="btn btn-outline-info right">Listar</button></a> --></h3>
		<?php 
			if($msg != false){
				echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
						<strong>Notificação: </strong> $msg
						  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						    <span aria-hidden='true'>&times;</span>
						  </button>
						</div>"; 
			}
		?>
		<form action="index.php?pg=7" method="POST" enctype="multipart/form-data">
			<div class="form-row">
				<div class="form-group col-md-4">
			      <label for="Nome">Nome</label>
			      <input class="form-control" type="text" name="nome" required>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="Nome">Prefixo</label>
			      <input class="form-control" type="text" name="pre" required>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="Audio">Audio</label>
			      <input class="form-control" type="file" name="info" required>
			    </div>
			    <div class="col-md-4 mb-4">
                   <label for="Audio">Cor</label>
			      <input type="color" name="cor" required>
                </div>
			    
			</div>

		  	<div class="form-group row">
		  		<div class="col-sm-10">
		  			<button class="btn btn-outline-info" type="submit"> Cadastrar <i class="fa fa-fw fa-lg fa-floppy-o"></i> </button>
		  			<a href="index.php?pg=13"><button type="button" class="btn btn-outline-danger"><i class="fa fa-fw fa-lg fa-chevron-left"></i>Voltar</button></a>
		  		</div>
		  	</div>

		</form>
	</div>
</main>
<?php include_once("include/footer.php"); ?>