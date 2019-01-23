<?php
	session_start();
	include_once("include/aside.php");
	include_once("seguranca.php");
	include_once("../conexao.php");

	$id = $_GET['id'];
	$result = mysql_query("SELECT * FROM usuarios WHERE id='$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>

<main class="app-content">
	<div class="clearfix"></div>
    <div class="tile">
    	<h3 class="tile-title"><i class="fa fa-user"> </i> Listar Usuário</h3><br>

		<div class="row">
			<div class="col-md-12">

				<table class="table table-striped">
					<thead>
						<th><i class="fa fa-user-o">     </i> Nome</th>
						<th><i class="fa fa-envelope-o"> </i> E-mail</th>
						<th><i class="fa fa-key">        </i> Nivel de Acesso</th>
						<th><i class="fa fa-briefcase">  </i> Cargo</th>
						<th><i class="fa fa-map-marker"> </i> Cidade</th>
					</thead>
					<tbody>
						<td><?php echo $resultado['nome']; ?></td>
						<td><?php echo $resultado['email']; ?></td>
						<td>
							<?php 
								if ($resultado['nivel_acesso_id'] === "ADM"): 
									echo $resultado['nivel_acesso_id'] = "Adminstrador";
								endif; 
							?>
						</td>


						<td><?php echo $resultado['cargo']; ?></td>
						<td><?php echo $resultado['cidade']; ?></td>
					</tbody>
				</table>
			</div>
		</div>
		<a href="index.php?pg=3"><button type="button" class="btn btn-outline-danger"><i class="fa fa-fw fa-lg fa-chevron-left"></i>Voltar</button></a>
	</div>
</main>

<?php include_once("include/footer.php"); ?>