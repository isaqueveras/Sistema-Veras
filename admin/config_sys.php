<?php 
	session_start(); 
	include_once("seguranca.php");
	include_once("include/aside.php");
	include_once("../conexao.php");

	$result = mysql_query("SELECT * FROM cursos WHERE id='$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);

?>
<main class="app-content">
<div class="clearfix"></div>
	<div class="tile">
		<h3 class="tile-title"><i class="icon fa fa-cog"> </i> Configuração do Sistema</h3>
          
		  <div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-responsivel">
					<tbody>

						<tr>
						  <td>
						    <div class="col-xs-6 col-sm-4 col-md-12">
						      <b>Nome do sistema: </b> V E R A S
						    </div>	
						  </td>
						</tr>

						<tr>
						  <td>
						    <div class="col-xs-6 col-sm-4 col-md-12">
						      <b>---: </b> --
						    </div>	
						  </td>
						</tr>

						<tr>
						  <td>
						    <div class="col-xs-6 col-sm-4 col-md-12">
						      <b>---: </b> --
						    </div>	
						  </td>
						</tr>

						<tr>
						  <td>
						    <div class="col-xs-6 col-sm-4 col-md-12">
						      <b>---: </b> -- 
						    </div>	
						  </td>
						</tr>

						<tr>
						  <td>
						    <div class="col-xs-6 col-sm-4 col-md-12">
						      <b>---: </b> --
						    </div>	
						  </td>
						</tr>


					</tbody>
				</table>
			</div>
		</div>
		  
    </div>
</main>
<?php include_once("include/footer.php"); ?>