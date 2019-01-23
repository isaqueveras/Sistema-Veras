<style type="text/css">
	.btn-white{
		padding: 3px;
		background-color: rgba(250,250,250,.9);
	}
</style>
<?php
	session_start();  
	include_once("seguranca.php");
	include_once("../conexao.php");
	
	$audios = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  	$audio = mysql_num_rows($audios);
?>
<main class="app-content">
<div class="clearfix"></div>
<div class="tile">
    <h3 class="tile-title"><i class="icon fa fa-music"></i> Listar Audios <hr>
    
    <!-- Mensagem do processo que teve -->
    <?php if(isset($_SESSION['proc'])){ ?>
			<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				<strong>Notificação: </strong>  
		            <?php echo $_SESSION['proc'];  
		              	  unset ($_SESSION['proc']); ?>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			</div> <?php } ?>

	<div class="row">
		<?php while($audio = mysql_fetch_array($audios)){ ?> 

		    <div class="col-md-6 col-lg-4">
		        <div class="widget-small" style="background-color: <?php echo $audio['cor']; ?>;"><i class="icon fa fa-music fa-3x"></i>
		            <div class="info">
		            	<h4><i class="fa fa-music" > </i> <?php echo $audio['pre']; ?></h4>
			             <a href="exibir_audio.php?id=<?php echo $audio['id']; ?>">
			              	<button class="btn btn-sm btn-white"><i class="fa fa-list-ul"></i>Listar</button>
			              </a>

			              <a href="processa/apagar_audio.php?id=<?php echo $audio['id']; ?>" data-toggle="modal" data-target="#apagar_audio-<?php echo $audio['id']; ?>">
			              	<button class="btn btn-sm btn-white" ><i class="fa fa-trash"></i>Apagar</button>
			              </a>

		              <div class="modal fade" id="apagar_audio-<?php echo $audio['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle"  style="color: black;"><i class="fa fa-exclamation-triangle"> </i> ATENÇÃO</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-body">
									<h5 style="color: black;">Você deseja realmente apagar esse audio?</h5>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times"></i> Não </button>
									<a href="processa/apagar_audio.php?id=<?php echo $audio['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-check"></i> Sim</a>
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



<?php include_once("include/footer.php"); ?>