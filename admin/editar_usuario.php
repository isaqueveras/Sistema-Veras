<?php  
  session_start();
  include_once("seguranca.php");
  include_once("../conexao.php");
  include_once("include/aside.php");

  $id = $_GET['id'];
  $result = mysql_query("SELECT * FROM usuarios WHERE id='$id' LIMIT 1");
  $resultado = mysql_fetch_assoc($result);

?>

<main class="app-content">
<div class="clearfix"></div>
  <div class="tile">
    <h3 class="tile-title"><i class="icon fa fa-pencil-square-o"></i> Editar Usuário</h3>
    <form method="POST" action="processa/editar_usuario.php?id=<?php echo $resultado['id']; ?>">
      
      <?php 
      if(isset($_SESSION['proc'])){ ?>
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
          <strong>Notificação: </strong>  
                    <?php echo $_SESSION['proc'];  
                        unset ($_SESSION['proc']); ?>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        </div> <?php } ?>

      <div class="row mb-12">
        <div class="col-md-6">
          <label>Nome</label>
          <input name="nome" class="form-control" type="text" value="<?php echo $resultado['nome']; ?>">
        </div>
        <div class="col-md-6">
          <label>Senha</label>
          <input name="senha" class="form-control" type="password" value="<?php echo $resultado['senha']; ?>">
        </div>
      </div><br>
      <div class="row mb-12">
        <div class="col-md-3">
          <label>Cargo na Escola</label>
          <input name="cargo" class="form-control" type="text" value="<?php echo $resultado['cargo']; ?>">
        </div>
        <div class="col-md-5">
          <label>E-mail</label>
          <input name="email" class="form-control" type="email" value="<?php echo $resultado['email']; ?>">
        </div>
        <div class="col-md-4">
          <label>Cidade</label>
          <input name="cidade" class="form-control" type="text" value="<?php echo $resultado['cidade']; ?>">
        </div>
      </div><br>
      
      <div class="row mb-10">
        <div class="col-md-12">
          <button class="btn btn-outline-info " type="submit"> Salvar <i class="fa fa-fw fa-lg fa-floppy-o"></i> </button>
          <a href="index.php?pg=3"><button class="btn btn-outline-danger" type="button"><i class="fa fa-fw fa-lg fa-chevron-left"></i>Voltar </button></a>
        </div>
      </div>
    </form>
  </div>
</main>
<?php echo include_once("include/footer.php"); ?>