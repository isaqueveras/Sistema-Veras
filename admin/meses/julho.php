<?php
  include_once("../seguranca.php"); 
  $id = $_GET['id']; 
  $resultado = mysql_query("SELECT * FROM julho WHERE id='$id' LIMIT 1");
  $linhas = mysql_num_rows($resultado);

  $audios = mysql_query("SELECT * FROM audio ORDER BY 'id'");
  $audio = mysql_num_rows($audios);

  include_once("include/aside.php");
?>
<main class="app-content">
    <div class="clearfix"></div>
      <div class="tile">
          <h3 class="tile-title"><i class="fa fa-clock-o"> </i> HORÁRIO DE JULHO
            <a href="cad_mes.php?mes=<?php echo $_GET['mes']; ?>"><button class="btn btn-sm btn-outline-primary right" type="button">Cadastrar</button></a>
          </h3>
          <div class="table-responsive table-hover">
              <table class="table table-striped" data-toggle="buttons">
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
                  <?php
                    while($linhas = mysql_fetch_array($resultado)){ ?>
                      <tr>
                        <td><button class="btn btn-sm btn-danger" disabled=""><?php echo $linhas['dia']; ?></button></td>
                        <td>
                          <button id="play_1" class="btn btn-sm btn-outline-primary">1° Turma</button>
                          <audio id="audio_1" src="audios/<?php echo $linhas['turma_1']; ?>"></audio>
                        </td>
                        <td>
                          <button id="play_2" class="btn btn-sm btn-outline-primary">2° Turma</button>
                          <audio id="audio_2" src="audios/<?php echo $linhas['turma_2']; ?>"></audio>
                        </td>
                        <td>
                          <button id="play_3" class="btn btn-sm btn-outline-primary">3° Turma</button>
                          <audio id="audio_3" src="audios/<?php echo $linhas['turma_3']; ?>"></audio>
                        </td>
                        <td>
                          <button id="play_4" class="btn btn-sm btn-outline-primary">4° Turma</button>
                          <audio id="audio_4" src="audios/<?php echo $linhas['turma_4']; ?>"></audio>
                        </td>
                        <td>
                          <button id="play_5" class="btn btn-sm btn-outline-primary">5° Turma</button>
                          <audio id="audio_5" src="audios/<?php echo $linhas['turma_5']; ?>"></audio>
                        </td>
                        <td>
                          <button id="play_6" class="btn btn-sm btn-outline-primary">6° Turma</button>
                          <audio id="audio_6" src="audios/<?php echo $linhas['turma_6']; ?>"></audio>
                        </td>
                        <td>
                          <button id="play_7" class="btn btn-sm btn-outline-primary">7° Turma</button>
                          <audio id="audio_7" src="audios/<?php echo $linhas['turma_7']; ?>"></audio>
                        </td>
                        <td>
                          <button id="play_8" class="btn btn-sm btn-outline-primary">8° Turma</button>
                          <audio id="audio_8" src="audios/<?php echo $linhas['turma_8']; ?>"></audio>
                        </td>
                        <td>
                          <button id="play_9" class="btn btn-sm btn-outline-primary">9° Turma</button>
                          <audio id="audio_9" src="audios/<?php echo $linhas['turma_9']; ?>"></audio>
                        </td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
              <a href="mes.php?mes=19"><button type="button" class="btn btn-sm btn-outline-danger"><i class="fa fa-fw fa-lg fa-chevron-left"></i>Voltar</button></a>
            </div>
          </div>
    </main>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/music_button.js"></script>
  </body>
</html>