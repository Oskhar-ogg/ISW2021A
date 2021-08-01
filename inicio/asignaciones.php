
<!-- --------------head------------------ -->
<?php include('../partes/head.php') ?>
<!-- --------------fin head-------------- -->
<html>
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
                    <h1 class="font-weight-bold mb-0">BIENVENIDO A</h1>
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
                                <h6 class="text-muted">EQUIPOS ASIGNADOS</h6>
                                <h3 class="font-weight-bold">750</h3>                                
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex stat my-3">
                              <div class="mx-auto">
                                <h6 class="text-muted">EQUIPOS DISPONIBLES</h6>
                                <h3 class="font-weight-bold">300</h3>                                
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
                                      <h2 class="align-self-center mb-0"><ion-icon name="add-circle-outline"></ion-icon></h2>
                                    </div>
                                    <div class="align-self-center">
                                      <div class="align-self-center">
                                       <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#modalAsigEqui">ASIGNAR EQUIPO</button>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="d-flex border-bottom py-2">
                                    <div class="d-flex mr-3">
                                      <h2 class="align-self-center mb-0"><ion-icon name="alarm-outline"></ion-icon></i></h2>
                                    </div>
                                    <div class="align-self-center">
                                      <button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#modalRenoEqui">RENOVAR PLAZO</button>
                                    </div>
                                  </div>
                                  <div class="d-flex border-bottom py-2">
                                    <div class="d-flex mr-3">
                                      <h2 class="align-self-center mb-0"><ion-icon name="close-outline"></ion-icon></i></h2>
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
                                        <h6 class="text-muted">EQUIPOS EN MANTENCION</h6>
                                        <h3 class="font-weight-bold">135</h3>                                        
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">EQUIPOS REEMPLAZADOS</h6>
                                        <h3 class="font-weight-bold">60</h3>                                    </div>
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
                    </div>
                </div>
              </div>
              <div class="col-lg-8 my-3">
                  <div class="card rounded-0">
                    <div class="card-header bg-light">
                      <h6 class="font-weight-bold mb-0">UNIVERSIDAD EN CONVENIO CON LA NUESTRA</h6>
                    </div>
                    <div class="card-body">
                     <iframe id="inlineFrameExample"
                        title="Inline Frame Example"
                        width="600"
                        height="450"
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2258.412284615604!2d-73.01200015471109!3d-36.82146047754777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b41835139b61%3A0x4c8fe1808ebdd3f9!2sUniversidad%20del%20B%C3%ADo-B%C3%ADo!5e0!3m2!1ses-419!2scl!4v1627772644927!5m2!1ses-419!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
  </div>
</div>
   
<!-----------------------------------------------------------------------Modal ASIGNAR EQUIPO---------------------------------------------------->
<div class="modal fade" id="modalAsigEqui" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

            <input  class="form-control" id="Fecha-Inicio" placeholder="Fecha Inicio">
            <input  class="form-control" id="Fecha-Fin" placeholder="Fecha Vencimiento">
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
  <table>
<tr>
  <td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
<tr>
<td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
<tr>
  <td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
</table></div>
  <div class="tab-pane fade" id="Perfil_2" role="tabpanel" aria-labelledby="Perfil_2-tab">
  <table>
<tr>
  <td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
<tr>
<td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
<tr>
  <td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
</table>
  </div>
  <div class="tab-pane fade" id="Perfil_3" role="tabpanel" aria-labelledby="Perfil_3-tab"><table>
<tr>
  <td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
<tr>
<td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
<tr>
  <td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
</table></div>
  <div class="tab-pane fade" id="Perfil_4" role="tabpanel" aria-labelledby="Perfil_4-tab"><table>
<tr>
  <td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
<tr>
<td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
<tr>
  <td>IDEQUIPO|</td>
  <td>Modelo|</td>
  <td>Comentarios...|</td>
  <td>Disponibilidad</td>
  <td><button type="button" class="btn btn-primary">Seleccionar</button></td>
</tr>
</table></div>
</div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div> 

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
        <ul class="list-group list-group-horizontal-md" >
            <li class="list-group-item"> ID Equipo
            <input  class="form-control" id="IDEQUIPO" placeholder="ID"></li>
            <li class="list-group-item"> Nueva Fecha de Vencimiento
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
      <input  class="form-control" id="IDEQUIPOELIM" placeholder="Cod Usuario">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
       
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>            
</body>
</html>