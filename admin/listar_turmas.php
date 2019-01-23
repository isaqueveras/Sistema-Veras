<style type="text/css">
	.btn-white{
		padding: 3px;
		background-color: rgba(250,250,250,.7);
	}
</style>
<?php 
	session_start(); 
	include_once("seguranca.php");
	include_once("../conexao.php");
	
	$cursos = mysql_query("SELECT * FROM cursos ORDER BY 'id'");
  	$curso = mysql_num_rows($cursos);
?>
<main class="app-content">
<div class="clearfix"></div>
    <div class="tile">
    	<h3 class="tile-title"><i class="icon fa fa-graduation-cap"></i> Listar Turmas <a href="turma.php?curso=1"><button class="btn btn-outline-info right">Cadastrar</button></a></h3>
			<?php 
				if(isset($_SESSION['proc'])){ ?>
					<div class='alert alert-info alert-dismissible fade show' role='alert'>
						<strong>Notificação: </strong>  
	              			<?php echo $_SESSION['proc'];  
	              				  unset ($_SESSION['proc']); ?>
				        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					</div> <?php
	            }
			?>
		<div class="row">
		  <?php 
		    while($curso = mysql_fetch_array($cursos)){ ?> 

		        <div class="col-md-6 col-lg-4">
		          <div class="widget-small" style="background-color: <?php echo $curso['cor']; ; ?>"><i class="icon fa fa-graduation-cap fa-3x"></i>
		            <div class="info">
		              <h4><i class="fa fa-graduation-cap" > </i> <?php echo $curso['pre']; ?></h4>
		             	
		              <a href="exibir_turma.php?id=<?php echo $curso['id']; ?>">
		              	<button class="btn btn-sm btn-white"><i class="fa fa-list-ul"> </i>Listar</button>
		              </a>

		              <a href="turma.php?curso=3&id=<?php echo $curso['id']; ?>">
		              	<button class="btn btn-sm btn-white"><i class="fa fa-lg fa-edit"></i>Editar</button>
		              </a>

		              <a href="processa/apagar_turma.php?id=<?php echo $curso['id']; ?>">
		              	<button class="btn btn-sm btn-white"><i class="fa fa-trash"> </i>Apagar</button>
		              	
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
						        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times"></i> Não</button>
						        <a href="processa/apagar_cha_9.php?id=<?php echo $linhas['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-check"></i> Sim</a>
						      </div>

						    </div>
						  </div>
						</div>
		            </div>  
		          </div>
		        </div>

		    <?php } ?>
		</div>
	</div>
</main>