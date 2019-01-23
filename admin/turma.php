<?php 
  session_start();
  include_once("include/aside.php");
  include_once("seguranca.php");
  include_once("../conexao.php");

  $pg = $_GET["curso"];

  $pag[1] = "cad_turma.php";
  $pag[2] = "listar_turmas.php";
  $pag[3] = "editar_turma.php";

  if(!empty($pg)){
    if(file_exists($pag[$pg])){
      include $pag[$pg];
    }else{
      include "bem_vindo.php";
    }
  }else{
    include "bem_vindo.php";
  }
  
  include_once("include/footer.php");
?>