<?php  
    session_start();
    include_once("../../seguranca.php");
    include_once("../../conexao.php");

    $dia     = $_POST['dia'];
    $turma_1 = $_POST['turma_1'];
    $turma_2 = $_POST['turma_2'];
    $turma_3 = $_POST['turma_3'];
    $turma_4 = $_POST['turma_4'];
    $turma_5 = $_POST['turma_5'];
    $turma_6 = $_POST['turma_6'];
    $turma_7 = $_POST['turma_7'];
    $turma_8 = $_POST['turma_8'];
    $turma_9 = $_POST['turma_9'];

    $query = mysql_query("INSERT INTO janeiro (dia,turma_1,turma_2,turma_3,turma_4,turma_5,turma_6,turma_7,turma_8,turma_9,created) VALUES('$dia','$turma_1','$turma_2','$turma_3','$turma_4','$turma_5','$turma_6','$turma_7','$turma_8','$turma_9',NOW())");

    if (mysql_affected_rows() != 0):
        $_SESSION['proc'] = "Horário do dia $dia cadastrado com sucesso!";
        header("Location: ../mes.php?mes=13");         
    else:
        $_SESSION['proc'] = "Falha ao cadastrar o Horário do dia $dia!";
        header("Location: ../mes.php?mes=13"); 
    endif; 
?>