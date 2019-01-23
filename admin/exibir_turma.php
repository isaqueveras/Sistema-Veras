<?php
	session_start();
	include_once("include/aside.php");
	include_once("seguranca.php");
	include_once("../conexao.php");
	$id = $_GET['id'];

	$result = mysql_query("SELECT * FROM cursos WHERE id='$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>

<main class="app-content">
	<div class="clearfix"></div>
    <div class="tile">
    	<h3 class="tile-title"><i class="fa fa-graduation-cap"> </i> Dados do curso de <?php echo $resultado['nome']; ?></h3><br>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-responsivel">
					<tbody>

						<tr>
							<td>
								<div class="col-xs-6 col-sm-4 col-md-2">
									<b>Nome:</b>
								</div>
								<div class="col-xs-6 col-sm-8 col-md-10">
									<?php echo $resultado['nome']; ?>
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<div class="col-xs-6 col-sm-2 col-md-2">
									<b>Audio:</b>
								</div>
								<div class="col-xs-6 col-sm-10 col-md-10">
									<audio controls>
									  <source src="audios/<?php echo $resultado['audio']; ?>">
									</audio>
									
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<div class="col-xs-6 col-sm-4 col-md-2">
									<b>Prefixo:</b>
								</div>
								<div class="col-xs-6 col-sm-8 col-md-10">
									<?php echo $resultado['pre']; ?>
								</div>
							</td>
						</tr>

						<!-- <tr>
							<td>
								<div class="col-xs-6 col-sm-4 col-md-2">
									<b>Criado:</b>
								</div>
								<div class="col-xs-6 col-sm-8 col-md-10">
									<?php echo $resultado['created']; ?>
								</div>
							</td>
						</tr> -->

					</tbody>
				</table>
			</div>
		</div>
	<a href="turma.php?curso=2"><button type="button" class="btn btn-danger">Voltar</button></a>
	</div>
</main>

<?php include_once("include/footer.php"); ?>