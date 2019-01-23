<?php 
  include_once("../../conexao.php");

  $audio_res = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio = mysql_num_rows($audio_res);
?>
<main class="app-content">
    <div class="clearfix"></div>
      <div class="tile">
        <form action="processa/cad_cha_05.php" method="POST">
          <h3 class="tile-title"><i class="fa fa-clock-o"> </i> CADASTRAR HORÁRIO DE ALMOÇO - MAIO</h3>
          <div class="table-responsive table-striped">
            <table class="table table-fixed table-sm table-responsive-lg" data-toggle="buttons">
                <thead>
                  <tr>
                    <th>Dia</th>
                    <th>1° Turma</th>
                    <th>2° Turma</th>
                    <th>3° Turma</th>
                    <th>4° Turma</th>
                    <th>5° Turma</th>
                    <th>6° Turma</th>
                    <th>7° Turma</th>
                    <th>8° Turma</th>
                    <th>9° Turma</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php include_once("day.php"); ?></td>
                    <td><?php include_once("option_1.php"); ?></td> 
                    <td><?php include_once("option_2.php"); ?></td>
                    <td><?php include_once("option_3.php"); ?></td>
                    <td><?php include_once("option_4.php"); ?></td>
                    <td><?php include_once("option_5.php"); ?></td>
                    <td><?php include_once("option_6.php"); ?></td>
                    <td><?php include_once("option_7.php"); ?></td>
                    <td><?php include_once("option_8.php"); ?></td>
                    <td><?php include_once("option_9.php"); ?></td>
                  </tr>
                </tbody>
            </table>
            <button class="btn btn-outline-primary text-right" type="submit">Cadastrar</button>
            <a href="mes.php?mes=17"><button type="button" class="btn btn-outline-danger"><i class="fa fa-fw fa-lg fa-chevron-left"></i>Voltar</button></a>
        </form>
    </div>
</main>