<?php 
	session_start();
	include_once("seguranca.php");  
  include_once("include/aside.php");
  include_once("../conexao.php");

  $resultado = mysql_query("SELECT * FROM fevereiro ORDER BY 'id'");
  $linhas = mysql_num_rows($resultado);
?>
<main class="app-content">
<div class="clearfix"></div>
    <div class="tile">
    	<h3 class="tile-title"><i class="icon fa fa-clock-o"></i> Listar Horários de Fevereiro <a href="cad_mes.php?mes=2"><button class="btn btn-outline-info right">Cadastrar</button></a></h3>
    	<!-- Incluindo o alerta de notificação -->
		<?php include_once("include/alert.php"); ?>

		<table class="table table-striped">
		  <thead>
			<tr>
			  <th>Dia</th>
			  <th>Ações</th>
			</tr>
		  </thead>
		  <tbody>
			<?php 
			  while($linhas = mysql_fetch_array($resultado)){
				echo "<tr>";
				  echo "<td>Chamada do dia <strong>".$linhas['dia']."</strong></td>"; ?>
					<td> 
					  <a href='mes.php?mes=2&id=<?php echo $linhas['id']; ?>'>
						<button type='button' class='btn btn-sm btn-outline-info'><i class="fa fa-fw fa-lg fa-chevron-right"></i>Entrar</button>
					  </a>

					  <a href='processa/apagar_cha_2.php?id=<?php echo $linhas['id']; ?>' data-toggle="modal" data-target="#apagar_dia-<?php echo $linhas['id']; ?>">
						<button type='button' class='btn btn-sm btn-danger'><i class="icon fa fa-trash"></i> Apagar </button>
					  </a>
					  
						<div class="modal fade" id="apagar_dia-<?php echo $linhas['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-question-circle-o"></i> ATENÇÃO</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>

						      <div class="modal-body">
						        <h5>Você deseja realmente apagar esse dia?</h5>
						      </div>

						      <div class="modal-footer">
						        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times"></i> Não </button>
						        <a href="processa/apagar_cha_2.php?id=<?php echo $linhas['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-check"></i> Sim</a>
						      </div>

						    </div>
						  </div>
						</div>
					</td> <?php echo "</tr>"; } ?>
			</tbody>
		</table>
	</div>
</main>
<?php include_once("include/footer.php"); ?>