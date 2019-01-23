<?php 
    session_start();
    include_once("seguranca.php"); 
?>
<main class="app-content">
	<div class="clearfix"></div>
    <div class="tile">
    	<h3 class="tile-title"><i class="fa fa-graduation-cap"> </i> CADASTRAR TURMA </h3><br>
        
        <form action="processa/cad_turma.php" method="POST">
			<div class="row">
                <div class="clearfix"></div>
                <div class="col-md-5 mb-4">
                    <label>Nome da Sala</label>
                    <input name="nome_sala" class="form-control" type="text" placeholder="Informe o nome da sala.." required="required" autofocus="autofocus">
                </div>
                <div class="col-md-3 mb-4">
                    <label>Prefixo da Sala</label>
                    <input name="pre_sala" class="form-control" type="text" placeholder="Informe o prefixo do sala.." required="required" >
                </div>
                <div class="col-md-4 mb-4">
                    <label>Áudio da Sala</label>
                    <input name="audio_sala" class="form-control btn-outline-primary" type="file" required="required"> 
                </div>
                <div class="col-md-4 mb-4">
                    <label>Cor do Card:</label>
                    <input type="color" name="cor_sala">
                </div>
                <div class="col-md-12 mb-4">
                    <button class="btn btn-outline-info " type="submit"> Cadastrar Sala <i class="fa fa-fw fa-lg fa-floppy-o"></i> </button>
                    <input class="btn btn-outline-danger" type="reset" value="Limpar Campos">
                </div>
            </div>
        </form>
    </div>
</main>
<?php  include_once("include/footer.php"); ?>