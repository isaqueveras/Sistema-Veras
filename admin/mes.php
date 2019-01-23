<?php 
  session_start();
  include_once("include/aside.php");
  include_once("../conexao.php");
  
  $pg = $_GET["mes"];

  $pag[1] = "meses/janeiro.php";
  $pag[2] = "meses/fevereiro.php";
  $pag[3] = "meses/marco.php";
  $pag[4] = "meses/abril.php";
  $pag[5] = "meses/maio.php";
  $pag[6] = "meses/junho.php";
  $pag[7] = "meses/julho.php";
  $pag[8] = "meses/agosto.php";
  $pag[9] = "meses/setembro.php";
  $pag[10] = "meses/outubro.php";
  $pag[11] = "meses/novembro.php";
  $pag[12] = "meses/dezembro.php";

  $pag[13] = "listar_cha_1.php";
  $pag[14] = "listar_cha_2.php";
  $pag[15] = "listar_cha_3.php";
  $pag[16] = "listar_cha_4.php";
  $pag[17] = "listar_cha_5.php";
  $pag[18] = "listar_cha_6.php";
  $pag[19] = "listar_cha_7.php";
  $pag[20] = "listar_cha_8.php";
  $pag[21] = "listar_cha_9.php";
  $pag[22] = "listar_cha_10.php";
  $pag[23] = "listar_cha_11.php";
  $pag[24] = "listar_cha_12.php";

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