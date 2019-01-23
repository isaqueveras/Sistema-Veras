<?php 
  session_start();
  include_once("../seguranca.php");
?>
<style type="text/css">
  .right{
    float: right;
  }
  .app-sidebar__user-avatar{
    border: solid 2px #fff;
  }
</style>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="description" content="Sistema para fazer as chamadas do horário do almoço nas escola integral. [criado por Isaque Veras]">
    <meta property="og:autor" content="Isaque Veras">
    
    <title>SysVERAS.tech - Sistema de Chamadas para o almoço das Escola</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font-icon css-->
    <link href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/audio.js"></script>
    <script type="text/javascript" src="js/horas.js"></script>
    <script language="JavaScript"> 
       function startTime() { 
        var today = new Date(); 
        var h = today.getHours(); 
        var m = today.getMinutes(); 
        var s = today.getSeconds(); 
        // add a zero in front of numbers<10 
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML=h+":"+m+":"+s; t=setTimeout('startTime()',500); 
       } 
       function checkTime(i){ 
        if (i<10) { 
          i = "0" + i; 
        } return i; 
       }
    </script>
  </head> 
  <body class="app sidebar-mini rtl"  onload="startTime()">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php"><small>Sys</small><b>VERAS</b><small>.tech</small></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-cog fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li class="app-notification__footer">CONFIGURAÇÂO</li>
            <li><a class="dropdown-item" href="index.php?pg=5"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
            <!-- <li><a class="dropdown-item" href="index.php?pg=15"><i class="fa fa-cog fa-lg"></i> Configuração</a></li> -->
            <li><a class="dropdown-item" href="index.php?pg=10" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-power-off fa-lg"></i> Sair</a></li>
            <li class="app-notification__footer"></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu--> 
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img width="80" height="80" class="app-sidebar__user-avatar img-responsive" src="<?php echo "imagens/".$_SESSION['usuarioImg']; ?>" alt="<?php echo $_SESSION['usuarioNome']; ?>">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['usuarioNome']; ?></p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['usuarioCargo']; ?></p>
        </div>
      </div>
      <ul class="app-menu">

        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Área de Trabalho</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-music"></i><span class="app-menu__label">Audios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="index.php?pg=13"><i class="icon fa fa-music"></i> Listar Audios</a></li>
            <li><a class="treeview-item" href="index.php?pg=14"><i class="icon fa fa-music"></i> Cadastrar Audio</a></li>
          </ul>
        </li>
        
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Salas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="turma.php?curso=2"><i class="icon fa fa-graduation-cap"></i> Listar Salas</a></li>
            <li><a class="treeview-item" href="turma.php?curso=1"><i class="icon fa fa-graduation-cap"></i> Cadastrar Salas</a></li>
          </ul>
        </li> -->

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Usuários</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="index.php?pg=3"><i class="icon fa fa-users"></i> Listar Usuário</a></li>
            <li><a class="treeview-item" href="index.php?pg=4"><i class="icon fa fa-user-plus"></i> Cadastrar Usuário</a></li>
          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="index.php?pg=6">
            <i class="app-menu__icon fa fa-calendar"></i>
            <span class="app-menu__label">Meses</span>
          </a>
        </li>
       
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Configurações</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="index.php?pg=5"><i class="icon fa fa-user"></i> Perfil </a></li>
            <!-- <li><a class="treeview-item" href="index.php?pg=15"><i class="icon fa fa-cog"></i> Configuração do Site </a></li> -->
            <li><a class="treeview-item" href="../sair.php"><i class="icon fa fa-power-off"></i> Sair do Sistema </a></li>
            <!-- <li><a class="treeview-item" href="index.php?pg=17"><i class="icon fa fa-info"></i> Sobre </a></li> -->
          </ul>
        </li>
      </ul>
    </aside>

<!-- Modal para Sair -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle"><center><i class="fa fa-question-circle-o"></i> ATENÇÂO</center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <h5>Você deseja realmente sair do sistema?</h5>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Não </button>
        <a href="../sair.php" class="btn btn-outline-info"><i class="fa fa-check-circle-o"></i> Sim</a>
      </div>

    </div>
  </div>
</div>
    