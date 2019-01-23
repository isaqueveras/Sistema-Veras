<?php
	session_start();
	include_once("seguranca.php");  
  	include_once("include/aside.php");
  	include_once("../conexao.php");
  	$resultado = mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
  	$linhas = mysql_num_rows($resultado);
?>
<main class="app-content">
<div class="clearfix"></div>
    <div class="tile">
    	<h3 class="tile-title"><i class="icon fa fa-users"></i> Listar Usuário <a href="index.php?pg=4"><button class="btn btn-sm btn-outline-info right">Cadastrar</button></a></h3>
		
		<?php 
			if(isset($_SESSION['proc'])){ ?>
				<div class='alert alert-warning alert-dismissible fade show' role='alert'>
					<strong>Notificação: </strong>  
		              	<?php echo $_SESSION['proc'];  
		              			unset ($_SESSION['proc']); ?>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				</div> <?php } ?>

			<table class="table table-hover table-striped table-responsive">
				<thead>
				  <tr>
				  	<!-- <th>Código</th> -->
					<th>Nome</th>
					<th>E-mail</th>
					<th>Nivel</th>
					<th>Cargo</th>
					<th>Cidade</th>
					<th>Ações</th>
				  </tr>
				</thead>
				<tbody>
					<?php 
						while($linhas = mysql_fetch_array($resultado)){
							echo "<tr>";
								echo "<td>".$linhas['nome']."</td>";
								echo "<td>".$linhas['email']."</td>";
								echo "<td><span class='badge badge-pill badge-secondary'>" ?>
									<?php 
										if($linhas['nivel_acesso_id'] === "ADM"): 
											echo $linhas['nivel_acesso_id'] = "Adminstrador";
										endif;
								echo "<td>".$linhas['cargo']."</td>";
								echo "<td>".$linhas['cidade']."</td>"; 
									?>
								<?php "</span></td>"; ?>
								<td> 
									<a href='index.php?pg=9&id=<?php echo $linhas['id']; ?>'>
										<button type='button' class='btn btn-sm btn-outline-info'><i class="icon fa fa-eye"></i>Visualizar</button>
									</a>
									
									<a href='editar_usuario.php?id=<?php echo $linhas['id']; ?>'>
										<button type='button' class='btn btn-sm btn-outline-warning'><i class="icon fa fa-pencil-square-o"></i> Editar</button>
								    </a>
									
									<a href='processa/apagar_cha_5.php?id=<?php echo $linhas['id']; ?>' data-toggle="modal" data-target="#apagar_usu-<?php echo $linhas['id']; ?>">
										<button type='button' class='btn btn-sm btn-outline-danger'><i class="icon fa fa-trash"></i> Apagar </button>
								    </a>

								    <div class="modal fade" id="apagar_usu-<?php echo $linhas['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle"  style="color: black;"><i class="fa fa-exclamation-triangle"> </i> ATENÇÃO</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>

												<div class="modal-body">
													<h5>Você deseja realmente apagar o usúario?</h5>
												</div>

												<div class="modal-footer">
													<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times"></i> Não </button>
													<a href="processa/apagar_usuario.php?id=<?php echo $linhas['id']; ?>" class="btn btn-outline-info"><i class="fa fa-check"></i> Sim</a>
												</div>

											</div>
										</div>
									</div>

								</td> <?php
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
	</div>
</main>
<?php include_once("include/footer.php"); ?>