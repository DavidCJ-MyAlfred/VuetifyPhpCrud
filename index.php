<?php include("include/header.php")?>

<body>
  <div id="index.php">
  <div class="container p-12">
    <div class = "row">
        <div class="col-md-12">
            <div class ="card text-center border-primary">
                <div class="card-body border-primary mb-3">
                    <h1 class="card-title">Sistema CRUD</h5>
                    <p class="card-text">Un sistema CRUD permite ejecutar las operaciones básicas de trabajo en PHP y MySQL. Se usará una pequeña base de datos con una tabla llamada "alumno" para demostrar el funcioamiento</p>
                    <p class="card-text">Seleccione la operación en el menú de navegación ó en las siguientes cards:</p>                    
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="card mb-3" style="border-color:#396afc;">
                            <div class="card-header" style="border-color:#396afc;">REGISTRAR ALUMNOS</div>
                              <div class="card-body">
                              <p class="card-text">Esta opción permite CREAR un registro en la BDD</p>
                              <a href="agregarUser.php" class="btn btn-primary" style="background-color:#396afc;">Registrar</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card mb-3" style="border-color:#26a0da;">
                              <div class="card-header" style="border-color:#26a0da;">LISTADO DE ALUMNOS</div>
                                <div class="card-body">
                                <p class="card-text">Esta opción permite LEER un registro de la BDD</p>
                                <a href="listUser.php" class="btn btn-info" style="background-color:#26a0da;border-color:#26a0da;">Listado</a>
                              </div>
                            </div>
                          </div>
                        <br/>
                        <div class="col-sm-6">
                          <div class="card mb-3" style="border-color:#ff7e5f;">
                                <div class="card-header" style="border-color:#ff7e5f;">ACTUALIZAR REGISTRO DE ALUMNOS</div>
                                  <div class="card-body">
                                  <p class="card-text">Esta opción permite ACTUALIZAR un registro de la BDD</p>
                                  <a href="editarUser.php" class="btn btn-success" style="background-color:#ff7e5f;border-color:#ff7e5f;">Actualizar</a>
                                </div>
                              </div>
                            </div>
                          <div class="col-sm-6">
                            <div class="card mb-3" style="border-color:#dc2430;">
                                    <div class="card-header" style="border-color:#dc2430;">ELIMINAR REGISTRO DE ALUMNOS</div>
                                      <div class="card-body">
                                      <p class="card-text">Esta opción permite ELIMINAR un registro de la BDD</p>
                                      <a href="eliminarUser.php" class="btn btn-danger" style="background-color:#dc2430;border-color:#dc2430;">Eliminar</a>
                                    </div>
                                  </div>
                                </div>
                        <div class="col-sm">
                        <div class="card mb-3" style="border-color:#667db6;">
                                    <div class="card-header" style="border-color:#667db6;">REPORTE</div>
                                      <div class="card-body">
                                      <p class="card-text">Esta opción permite generar REPORTES de los registro existentes en la BDD</p>
                                      <a href="reporteUser.php" class="btn btn-primary" style="background-color:#667db6;border-color:#667db6;">Reporte</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</body>
<?php include("include/footer.php")?>
