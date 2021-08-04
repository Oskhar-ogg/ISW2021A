<!-- --------------head------------------ -->
<?php include('../partes/head.php') ?>
<!-- --------------fin head-------------- -->
<?php include("../conexion/conexion.php");
$Consulta_asignacion = "SELECT * FROM asignacion";
?>

<script src="../libs/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

<!-- -----------------------------------------------TEST---------------------------------------------------->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


<!-- Bootstrap Js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Datepicker CSS -->
<link rel="stylesheet" href="/libs/css/datepicker.css">



<!-- --------------------------------------------FINTEST--------------------------------------------------->

<!-- Bootstrap DatePicker -->
<script src="../libs/js/datepicker.js"></script>
<script src="../libs/css/datepicker.css"></script>


<body>
  <div class="d-flex" id="content-wrapper">
    <!-- -----------------------sideBar---------------------- -->
    <?php include('../partes/sidebar.php') ?>
    <!-- -----------------fin sideBar-------------------- -->

    <div class="w-100">

      <!-- --------------------------Navbar------------------------------------------- -->
      <?php include('../partes/nav.php') ?>
      <!-- --------------------------Fin Navbar--------------------------------------- -->

      <!-- ------------------------------Page Content------------------------------------- -->
      <div id="content" class="bg-grey w-100">

        <section class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <h1 class="font-weight-bold mb-0">USUARIO ACTIVO : JUAN</h1>
                <p class="lead text-muted">ASIGNACION DE EQUIPOS</p>
              </div>
              <div class="col-lg-3 col-md-4 d-flex">
                <button class="btn btn-primary w-100 align-self-center">BUSCAR</button>
              </div>
            </div>
          </div>
        </section>
        <!-- ----------------------------------------------------INICIO SECTOR ESTADISTICA-------------------------------------------------------- -->

        <section class="1bg-mix py-3">
          <div class="container">
            <div class="card rounded-0">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Equipos en arriendo</h6>
                      <h3 class="font-weight-bold">500</h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 83.3%</h6>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Equipos activos</h6>
                      <h3 class="font-weight-bold">250</h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 50%</h6>
                    </div>
                  </div>
                  <!-- ----------------------------------- INICIO SECTOR BOTONES---------------------------------------------------- -->
                  <div class="col-lg-4 my-3">
                    <div class="card rounded-0">
                      <div class="card-header bg-light">
                        <h6 class="font-weight-bold mb-0">ACCIONES A REALIZAR</h6>
                      </div>
                      <div class="card-body pt-2">
                        <div class="d-flex border-bottom py-2">
                          <div class="d-flex mr-3">
                            <h2 class="align-self-center mb-0">
                              <ion-icon name="add-circle-outline"></ion-icon>
                            </h2>
                          </div>
                          <div class="align-self-center">
                            <div class="align-self-center">
                              <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#modalAsigEqui" id="btn-asignar">ASIGNAR EQUIPO</button>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-bottom py-2">
                          <div class="d-flex mr-3">
                            <h2 class="align-self-center mb-0">
                              <ion-icon name="alarm-outline"></ion-icon></i>
                            </h2>
                          </div>
                          <div class="align-self-center">
                            <button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#modalRenoEqui">RENOVAR PLAZO</button>
                          </div>
                        </div>
                        <div class="d-flex border-bottom py-2">
                          <div class="d-flex mr-3">
                            <h2 class="align-self-center mb-0">
                              <ion-icon name="close-outline"></ion-icon></i>
                            </h2>
                          </div>
                          <div class="align-self-center">
                            <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#modalElimEqui">ELIMINAR EQUIPO</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ----------------------------------------------------FIN SECTOR BOTONES-------------------------------------------------------- -->

                <!-- ----------------------------------------------------CONTINUACION SECTOR ESTADISTICA-------------------------------------------------------- -->

                <div class="row">
                  <div class="col-lg-4 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Equipos en arriendo</h6>
                      <h3 class="font-weight-bold">500</h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 83.3%</h6>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Equipos activos</h6>
                      <h3 class="font-weight-bold">250</h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 50%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ----------------------------------------------------FIN SECTOR ESTADISTICA-------------------------------------------------------- -->

        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 my-3">
                <div class="card rounded-0">
                  <div class="card-header bg-light">
                    <h6 class="font-weight-bold mb-0">HISTORIAL DE ASIGNACION</h6>
                  </div>
                  <div class="card-body">
                    <!--  <iframe id="inlineFrameExample"
                        title="Inline Frame Example"
                        width="300"
                        height="200"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&layer=mapnik">
                      </iframe> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>





  




  <!-----------------------------------------------------------------------Modal ASIGNAR EQUIPO---------------------------------------------------->
  <div class="modal fade" id="modalAsigEqui" tabindex="6" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Asignar Equipo</h5>
          <h5 class="modal-title" id="exampleModalLabel">Asignar Equipo</h5>
          <h5 class="modal-title" id="exampleModalLabel">Asignar Equipo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input class="form-control" id="Rut-Asignado" placeholder="Rut del asignado">
          <input class="form-control" id="ID_equipo_s" placeholder="ID equipo seleccionado">
          <input type="text" class="form-control" data-toggle="datepicker" placeholder="Fecha">
          <input class="form-control" id="Fecha-Fin" placeholder="Fecha Vencimiento" readonly="">
          <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="Perfil_1-tab" data-toggle="tab" href="#Perfil_1" role="tab" aria-controls="Perfil_1" aria-selected="true">Perfil 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Perfil_2-tab" data-toggle="tab" href="#Perfil_2" role="tab" aria-controls="Perfil_2" aria-selected="false">Perfil 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Perfil_3-tab" data-toggle="tab" href="#Perfil_3" role="tab" aria-controls="Perfil_3" aria-selected="false">Perfil 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Perfil_4-tab" data-toggle="tab" href="#Perfil_4" role="tab" aria-controls="Perfil_4" aria-selected="false">Perfil 4</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="Perfil_1" role="tabpanel" aria-labelledby="Perfil_1-tab">
              <?php $Consulta_perfil_1 = "SELECT * FROM perfil WHERE perfil_nombre = 'Perfil 1' " ?>
                <?php $resultado = mysqli_query($conexion, $Consulta_perfil_1);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                  <table>
                    <tr>
                      <td>
                        <div class="table__item"> Id perfil <br> <?php echo $row["id_perfil"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Nombre perfil <br> <?php echo $row["perfil_nombre"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Gabinete <br> <?php echo $row["gabinete"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> CPU <br> <?php echo $row["CPU"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Varios <br> <?php echo $row["varios"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Nombre modelo <br> <?php echo $row["nombre_modelo"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> GPU <br> <?php echo $row["GPU"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Sistema Operativo <br> <?php echo $row["SO"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Fecha del perfil <br> <?php echo $row["fecha_perfil"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Marca <br> <?php echo $row["marca"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Fuente <br> <?php echo $row["fuente"]; ?></div>
                      </td>
                    <?php } mysqli_free_result($resultado); ?>
                  </table>
              </div>
              <div class="tab-pane fade" id="Perfil_2" role="tabpanel" aria-labelledby="Perfil_2-tab">
                <?php $Consulta_perfil_2 = "SELECT * FROM perfil WHERE id_perfil = 1" ?>
                <?php $resultado = mysqli_query($conexion, $Consulta_perfil_2);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                  <table>
                    <tr>
                      <td>
                        <div class="table__item"> Id perfil <br> <?php echo $row["id_perfil"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Nombre perfil <br> <?php echo $row["perfil_nombre"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Gabinete <br> <?php echo $row["gabinete"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> CPU <br> <?php echo $row["CPU"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Varios <br> <?php echo $row["varios"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Nombre modelo <br> <?php echo $row["nombre_modelo"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> GPU <br> <?php echo $row["GPU"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Sistema Operativo <br> <?php echo $row["SO"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Fecha del perfil <br> <?php echo $row["fecha_perfil"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Marca <br> <?php echo $row["marca"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Fuente <br> <?php echo $row["fuente"]; ?></div>
                      </td>
                    <?php } mysqli_free_result($resultado);?>
                  </table>
              </div>
              <div class="tab-pane fade" id="Perfil_3" role="tabpanel" aria-labelledby="Perfil_3-tab">
              <?php $Consulta_perfil_3 = "SELECT * FROM perfil WHERE perfil_nombre = 'Perfil 3' " ?>
                <?php $resultado = mysqli_query($conexion, $Consulta_perfil_3);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                  <table>
                    <tr>
                      <td>
                        <div class="table__item"> Id perfil <br> <?php echo $row["id_perfil"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Nombre perfil <br> <?php echo $row["perfil_nombre"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Gabinete <br> <?php echo $row["gabinete"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> CPU <br> <?php echo $row["CPU"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Varios <br> <?php echo $row["varios"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Nombre modelo <br> <?php echo $row["nombre_modelo"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> GPU <br> <?php echo $row["GPU"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Sistema Operativo <br> <?php echo $row["SO"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Fecha del perfil <br> <?php echo $row["fecha_perfil"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Marca <br> <?php echo $row["marca"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Fuente <br> <?php echo $row["fuente"]; ?></div>
                      </td>
                    <?php } mysqli_free_result($resultado);?>
                    </table>
              </div>
              <div class="tab-pane fade" id="Perfil_4" role="tabpanel" aria-labelledby="Perfil_4-tab">
              <?php $Consulta_perfil_4 = "SELECT * FROM perfil WHERE perfil_nombre = 'Perfil 4' " ?>
                <?php $resultado = mysqli_query($conexion, $Consulta_perfil_4);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                  <table>
                    <tr>
                      <td>
                        <div class="table__item"> Id perfil <br> <?php echo $row["id_perfil"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Nombre perfil <br> <?php echo $row["perfil_nombre"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Gabinete <br> <?php echo $row["gabinete"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> CPU <br> <?php echo $row["CPU"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Varios <br> <?php echo $row["varios"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Nombre modelo <br> <?php echo $row["nombre_modelo"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> GPU <br> <?php echo $row["GPU"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Sistema Operativo <br> <?php echo $row["SO"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Fecha del perfil <br> <?php echo $row["fecha_perfil"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Marca <br> <?php echo $row["marca"]; ?></div>
                      </td>
                      <td>
                        <div class="table__item"> Fuente <br> <?php echo $row["fuente"]; ?></div>
                      </td>
                    <?php } mysqli_free_result($resultado); ?>
                    </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" id="Guardar_asignacion">Guardar cambios</button>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------------------------------------------------------------------------ FIN MODAL ASIGNACION ------------------------------------------------------------------------------>

  <!------------------------------------------------------------------------------------------------- MODAL RENOVAR PLAZO ------------------------------------------------------------------------------>
  <div class="modal fade" id="modalRenoEqui" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Renovar Plazo Equipo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="list-group list-group-horizontal-md">
            <li class="list-group-item"> ID Equipo
              <input class="form-control" id="IDEQUIPO" placeholder="ID">
            </li>
            <li class="list-group-item"> Nueva Fecha de Vencimiento
            <input class="form-control" id="Nueva_Fecha" placeholder="Fecha_Nueva">
            </li>
            
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Guardar cambios</button>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------------------------------------------------------------------------ FIN MODAL RENOVACION ------------------------------------------------------------------------------>

  <!------------------------------------------------------------------------------------------------- MODAL ELIMINAR ASIGNACION ------------------------------------------------------------------------------>
  <div class="modal fade" id="modalElimEqui" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Equipo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input class="form-control" id="IDEQUIPOELIM" placeholder="Cod Usuario">
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Equipo 1</option>
            <option>Equipo 2</option>
            <option>Equipo 3</option>
            <option>Equipo 4</option>
            <option>Equipo 5</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Eliminar Seleccionado</button>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------------------------------------------------------------------------ FIN MODAL ELIMINACION ------------------------------------------------------------------------------>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>