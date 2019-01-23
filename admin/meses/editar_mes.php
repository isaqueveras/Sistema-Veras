<?php 
  include_once("../include/aside_2.php");

  $resultado = mysql_query("SELECT * FROM janeiro ORDER BY 'id'");
  $linhas = mysql_num_rows($resultado);

?>

<main class="app-content">
    <div class="clearfix"></div>
      <div class="tile">
          <h3 class="tile-title"><i class="fa fa-clock-o"> </i> HORÁRIO DE ALMOÇO - JULHO 2018</h3>
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
                  <tr>

                    <?php  
                      while($linhas = mysql_fetch_array($resultado)){
                        echo $linhas['id'];
                      }
                    ?>


                    <td>01</td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>






                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Info 1</option>
                          <option>Info 2</option>
                          <option>Info 3</option>
                          <option>Adm 1</option>
                          <option>Adm 2</option>
                          <option>Adm 3</option>
                          <option>Nutri 1</option>
                          <option>Agro 2</option>
                          <option>Agro 3</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

<?php  
  include_once("footer.php");
?>