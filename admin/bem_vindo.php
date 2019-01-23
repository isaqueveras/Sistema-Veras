<?php  
  session_start();
  include_once("seguranca.php");
  include_once("../conexao.php");
  $resultado = mysql_query("SELECT * FROM meses ORDER BY 'id'");
  $linhas = mysql_num_rows($resultado);

  $audios = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio = mysql_num_rows($audios);

  include_once("include/app-content.php");
?>
<div class="row">
   <div class="col-md-12 col-lg-12">

    <div class="widget-small" style="background-color: #6c757d;"><i class="icon fa fa-clock-o fa-3x"></i>
      <div class="info">
          <h4><i class="fa fa-clock-o"></i> Horário do Sistema</h4>
          <p><b><script type="text/javascript">document.write(str_data + ' às ' + "<b id='txt'></b> ");</script></b></p>
        </div>  
    </div>

  </div>
</div><hr>
<div class="row">

  <?php
    if(!empty($audio)):
      while($audio = mysql_fetch_array($audios)){ ?> 

        <div class="col-md-6 col-lg-4">
          <div class="widget-small" style="background-color: <?php echo $audio['cor']; ; ?>"><i class="icon fa fa-graduation-cap fa-3x"></i>
            <div class="info">
              <h4><i class="fa fa-graduation-cap" > </i> <?php echo $audio['pre']; ?></h4>
              <p><b><?php echo $audio['nome']; ?></b></p>
            </div>  
          </div>
        </div>

      <?php } else: ?>

    <div class="col-md-12 col-lg-12">
      <div class="card">
        <h5 class="card-header" style="background-color: #fca028; color: white;"><i class="fa fa-exclamation-triangle"> </i> Atenção</h5>
        <div class="card-body">
          <h5 class="card-title"><strong>Não existe nenhum audio cadastrado</strong></h5>
          <p class="card-text">Você pode cadastrar os audios do sistema <a href="index.php?pg=14">aqui</a> no botão em baixo.</p>
          <a href="index.php?pg=14" class="btn btn-outline-info">Cadastrar</a>
        </div>
      </div>
    </div>
    
<?php endif; ?>
</div><hr>

<?php 
  include_once("listar_mes.php"); 
  include_once("include/footer.php");
?>
