<?php 
  session_start();
  include_once("seguranca.php");
  include_once("include/aside.php");
  include_once("../conexao.php");

  $pg = $_GET["mes"];

  $pag[1] = "cad_mes/janeiro.php";
  $pag[2] = "cad_mes/fevereiro.php";
  $pag[3] = "cad_mes/marco.php";
  $pag[4] = "cad_mes/abril.php";
  $pag[5] = "cad_mes/maio.php";
  $pag[6] = "cad_mes/junho.php";
  $pag[7] = "cad_mes/julho.php";
  $pag[8] = "cad_mes/agosto.php";
  $pag[9] = "cad_mes/setembro.php";
  $pag[10] = "cad_mes/outubro.php";
  $pag[11] = "cad_mes/novembro.php";
  $pag[12] = "cad_mes/dezembro.php";

  $pag[13] = "meses/editar_mes.php";

  if(!empty($pg)):
    if(file_exists($pag[$pg])):
      include $pag[$pg];
    else:
      include "bem_vindo.php";
    endif;
  else:
    include "bem_vindo.php";
  endif;
 
  include_once("include/footer.php");
?>