<?php  
  session_start();
?>
<style type="text/css">
  .user-img{
    border: solid 2px #fff;
  }
</style>
<main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="<?php echo "imagens/".$_SESSION['usuarioImg']; ?>" alt="<?php echo $_SESSION['usuarioNome']; ?>">
              <h4><?php echo $_SESSION['usuarioNome']; ?></h4>
              <p><?php echo $_SESSION['usuarioCargo']; ?></p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Meus Dados</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Editar Conta</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline">
              <div class="timeline-post">
                <div class="post-content">
                  <h4><i class="fa fa-fw fa-database"></i> Dados da minha conta </h4>

                  <table class="table table-striped table-responsive">
                    <thead>
                      <th><i class="fa fa-user-o">     </i> Nome</th>
                      <th><i class="fa fa-envelope-o"> </i> E-mail</th>
                      <th><i class="fa fa-briefcase">  </i> Cargo</th>
                      <th><i class="fa fa-map-marker"> </i> Cidade</th>
                      <th><i class="fa fa-key">        </i> Nivel de Acesso</th>
                    </thead>
                    <tbody>
                      <td><?php echo $_SESSION['usuarioNome']; ?></td>
                      <td><?php echo $_SESSION['usuarioEmail']; ?></td>
                      <td><?php echo $_SESSION['usuarioCargo']; ?></td>
                      <td><?php echo $_SESSION['usuarioCidade']; ?></td>
                      <td>
                        <?php  
                          if ($_SESSION['usuarioNivelAcesso'] == "ADM") {
                            echo "Administrador";
                          }
                        ?>
                      </td>
                    </tbody>
                  </table>

                </div>
              </div>

            </div>
             <div class="tab-pane fade" id="user-settings">
              <div class="tile user-settings">
                <h4 class="line-head"><i class="fa fa-fw fa-user"></i> Editar Conta </h4>
                <form action="processa/edit_perfil.php" method="POST">
                  <div class="row mb-12">
                    <div class="col-md-6">
                      <img src="<?php echo "imagens/".$_SESSION['usuarioImg']; ?>" width="390" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                      <label><i class="fa fa-user"> </i> Nome</label>
                      <input name="nome" class="form-control" type="text" value="<?php echo $_SESSION['usuarioNome']; ?>"><br>

                      <label><i class="fa fa-key"> </i> Senha</label>
                      <input name="senha" class="form-control" type="password" value="<?php echo $_SESSION['usuarioSenha']; ?>"><br>

                      <label><i class="fa fa-briefcase"> </i> Cargo na Escola</label>
                      <input name="cargo" class="form-control" type="text" value="<?php echo $_SESSION['usuarioCargo']; ?>"><br>

                      <label><i class="fa fa-map-marker"> </i> Cidade</label>
                      <input name="cidade" class="form-control" type="text" value="<?php echo $_SESSION['usuarioCidade']; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-4">
                      <label><i class="fa fa-envelope"> </i> E-mail</label>
                      <input name="email" class="form-control" type="email" value="<?php echo $_SESSION['usuarioEmail']; ?>">
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-outline-info" type="submit">Atualizar Perfil <i class="fa fa-fw fa-check-circle-o"></i> </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade" id="user-settings">
              <div class="tile user-settings">
                <h4 class="line-head">Editar Conta <i class="fa fa-fw fa-user-o"></i></h4>
                <form action="processa/edit_perfil.php" method="POST">
                  <div class="row mb-12">
                    <div class="col-md-6">
                      <img src="<?php echo "imagens/".$_SESSION['usuarioImg']; ?>" width="390" class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                      <label>Nome</label>
                      <input name="nome" class="form-control" type="text" value="<?php echo $_SESSION['usuarioNome']; ?>"><br>

                      <label>Senha</label>
                      <input name="senha" class="form-control" type="password" value="<?php echo $_SESSION['usuarioSenha']; ?>"><br>

                      <label>Cargo na Escola</label>
                      <input name="cargo" class="form-control" type="text" value="<?php echo $_SESSION['usuarioCargo']; ?>"><br>

                      <label>Cidade</label>
                      <input name="cidade" class="form-control" type="text" value="<?php echo $_SESSION['usuarioCidade']; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-4">
                      <label>E-mail</label>
                      <input name="email" class="form-control" type="email" value="<?php echo $_SESSION['usuarioEmail']; ?>">
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-outline-info" type="submit">Atualizar Perfil <i class="fa fa-fw fa-check-circle-o"></i> </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>

  </body>
</html>