<?php
	session_start();
	include_once("include/aside.php");
	include_once("seguranca.php");
	include_once("../conexao.php");
	$id = $_GET['id'];

	$result = mysql_query("SELECT * FROM audio WHERE id='$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>

<main class="app-content">
	<div class="clearfix"></div>
    <div class="tile">
    	<h3 class="tile-title"><i class="fa fa-graduation-cap"> </i> Dados do Audio</h3>

		<div class="row">
			<div class="col-md-12">

				<table class="table table-striped">
					<thead>
						<th>Nome</th>
						<th>Audio</th>
					
					</thead>
					<tbody>
						<td><?php echo $resultado['nome']; ?></td>
						<td>
							<audio controls>
								<source src="audios/<?php echo $resultado['arquivo']; ?>">
							</audio>
						</td>
					
					</tbody>
				</table>

			</div>
		</div>
	<a href="index.php?pg=13"><button type="button" class="btn btn-outline-danger"><i class="fa fa-fw fa-lg fa-chevron-left"></i>Voltar</button></a>
	</div>
</main>

<?php include_once("include/footer.php"); ?>