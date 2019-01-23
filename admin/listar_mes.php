<meta charset="utf-8">
<?php  
  session_start();
  include_once("../seguranca.php");
  include_once("../conexao.php");
  
  $resultado = mysql_query("SELECT * FROM meses ORDER BY 'id'");
  $linhas = mysql_num_rows($resultado);
?>
<?php include_once("include/app-content.php"); ?>
<div class="row">

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Janeiro</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=13"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=1"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Janeiro</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Fevereiro</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=14"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=2"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Fevereiro</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Março</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=15"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=3"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Março</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Abril</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=16"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=4"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Abril</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Maio</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=17"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=5"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Maio</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Junho</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=18"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=6"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Junho</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Julho</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=19"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=7"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Julho</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Agosto</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=20"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=8"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Agosto</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Setembro</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=21"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=9"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Setembro</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Outubro</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=22"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=10"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Outubro</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Novembro</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=23"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=11"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Novembro</b><br>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title"><i class="fa fa-calendar"> </i> Dezembro</h3>
            <div class="btn-group">
              <a class="btn btn-outline-secondary" href="mes.php?mes=24"><i class="fa fa-arrow-right"></i></a>
              <a class="btn btn-outline-secondary" href="cad_mes.php?mes=12"><i class="fa fa-lg fa-edit"></i></a>
            </div>
          </div>
          <div class="tile-body">
            <b>Todos os registro do mês de Dezembro</b><br>
          </div>
        </div>
      </div>

</div>
</main>
<?php include_once("include/footer.php"); ?>