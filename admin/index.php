<?php
  session_start();
  include_once("include/aside.php"); 
  include_once("seguranca.php");

  $pg = $_GET["pg"];

  $pag[1] = "index.php";
  $pag[2] = "meses/editar_mes.php";
  $pag[3] = "listar_usuarios.php";
  $pag[4] = "cad_usuario.php";
  $pag[5] = "perfil.php";
  $pag[6] = "listar_mes.php";
  $pag[7] = "cad_audio.php";
  $pag[8] = "meses/cad_mes.php";
  $pag[9] = "exibir_usuario.php";
  $pag[10] = "../sair.php";
  $pag[12] = "exibir_cursos.php";
  $pag[13] = "listar_audio.php";
  $pag[14] = "cad_audio.php";
  $pag[15] = "config_sys.php";
  $pag[16] = "editar_usuario.php";
  $pag[17] = "sobre.php";
  

  if(!empty($pg)){
    if(file_exists($pag[$pg])){
      include $pag[$pg];
    }else{
      include "bem_vindo.php";
    }
  }else{
    include "bem_vindo.php";
  }

?>