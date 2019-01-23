<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - VERAS</title>
  </head>
  <body>
    <?php 
     unset($_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioEmail'],       
        $_SESSION['usuarioNivelAcesso'],    
        $_SESSION['usuarioCidade'],     
        $_SESSION['usuarioSenha'],         
        $_SESSION['usuarioCargo'],         
        $_SESSION['usuarioImg']);

     ?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1><small>Sys</small><b>VERAS</b><small>.tech</small></h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST" action="login.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Àrea de Login</h3>
          <div class="form-group">
            <label class="control-label"><i class="fa fa-lg fa-fw fa-envelope"> </i> E-MAIL</label>
            <input class="form-control" name="email" type="email" placeholder="E-mail" autofocus required="required">
          </div>
          <div class="form-group">
            <label class="control-label"><i class="fa fa-lg fa-fw fa-key"> </i> SENHA</label>
            <input class="form-control" name="senha" type="password" placeholder="Senha" required="required">
          </div><br>
          <div class="form-group btn-container">
            <button class="btn btn-block" style="background-color: #007abc; color: #fff;"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button>
          </div><br>
          <p class="text-center text-danger">
          <?php 
            if(isset($_SESSION['loginErro']))
              echo $_SESSION['loginErro'];  
              unset ($_SESSION['loginErro']);
          ?></p>
        </form>
      </div>
    </section>
  </body>
</html>