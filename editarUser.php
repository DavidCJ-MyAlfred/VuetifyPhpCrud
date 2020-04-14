<?php include("include/header.php") ?>
<?php include("include/db.php") ?>

<body>
  <div id="editarUser.php">
    <div class="modal fade" id="viewModal">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <!-- cabecera del modal -->
          <div class="modal-header" style="background-color: #ff7e5f;">
            <h4 class="modal-title mdi mdi-account-convert text-white">Actualizar informacion</h4>
            <button type="button" class="close mdi mdi-close-circle" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>
          <!-- cuerpo del modal -->
          <div class="modal-body">
            <form action="dataUpdate.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <input type="hidden" name="codigo" id="codigo">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text mdi mdi-account-box-outline text-white" style="background-color:#8e9eab;">NOMBRES:</div>
                    </div>
                    <input type="text" class="form-control" name="nombres" id="nombres" required>
                  </div>
                </div>
                <br />
                <div class="col-md-6">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text mdi mdi-layers text-white" style="background-color:#8e9eab">TIPO DE DOCUMENTO:</label>
                    </div>
                    <select class="custom-select" name="tipodoc" id="tipodoc" required>
                      <option selected>Seleccioné...</option>
                      <option name="tipodoc" id="tipodoc" text="TI">TI</option>
                      <option name="tipodoc" id="tipodoc" text="CC">CC</option>
                    </select>
                  </div>
                </div>
                <br />
                <div class="col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text mdi mdi-folder-account text-white" style="background-color:#8e9eab">DOCUMENTO:</div>
                    </div>
                    <input type="text" class="form-control" name="documento" id="documento">
                  </div>
                </div>
                <br />
                <div class="col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text mdi mdi-cellphone text-white" style="background-color:#8e9eab">TELEFONO:</div>
                    </div>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                  </div>
                </div>
                <br />
                <div class="col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text mdi mdi-gmail text-white" style="background-color:#8e9eab">CORREO:</div>
                    </div>
                    <input type="text" class="form-control" name="correo" id="correo">
                  </div>
                </div>
                <br />
                <div class="col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text mdi mdi-google-maps text-white" style="background-color:#8e9eab">DIRECCION:</div>
                    </div>
                    <input type="text" class="form-control" name="direccion" id="direccion">

                  </div>
                </div>
              </div>
          </div>
          <!-- pie del modal -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary mdi mdi-exit-to-app" data-dismiss="modal">Cerrar</button>
            <button type="" class="btn btn-success" style="background-color:#ff7e5f;border-color:#000000;" name="update2">Actualizar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="card text-center m-5" style="border-color:#ff7e5f;">
    <div class="card-header mdi mdi-table-edit text-white" style="background-color: #ff7e5f;border-color:#ff7e5f;">
      Listado de alumnos
    </div>
    <div class="card-body">
      <h5 class="card-title ">Los siguientes son los datos guardados hasta el momento y en cual puede actualizar los diferente datos que contiene el alumno:</h5>
    </div>
    <div class="card text-center m-5">
      <div class="card-header" style="background-color:#ff7e5f">
        <div class="container">
          <div class="table-responsive-lg border-primary">
            <table class="table border-primary">
              <thead class="bg-secondary text-white">
                <tr bgcolor="#ff7e5f">
                  <th>CODIGO</th>
                  <th>NOMBRES</th>
                  <th>TIPO DOC</th>
                  <th>DOCUMENTO</th>
                  <th>TELEFONO</th>
                  <th>CORREO</th>
                  <th>DIRECCIÓN</th>
                  <th>FECHA REGISTRO</th>
                  <th>ACCION</th>
                </tr>
              </thead>
              <tbody bgcolor="#ffffff">
                <?php
                $sql = "SELECT * FROM alumno";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                      <td><?php echo $row['codigo']; ?></td>
                      <td><?php echo $row['nombres']; ?></td>
                      <td><?php echo $row['tipodoc']; ?></td>
                      <td><?php echo $row['documento']; ?></td>
                      <td><?php echo $row['telefono']; ?></td>
                      <td><?php echo $row['correo']; ?></td>
                      <td><?php echo $row['direccion']; ?></td>
                      <td><?php echo $row['fecha_registro']; ?></td>
                      <td>
                        <button type="button" class="btn btn-primary updateBtn mdi mdi-account-convert" style="background-color: #ff7e5f;border-color:#ff7e5f;" data-toggle="modal" data-id="codigo" data-target="viewModal">Actualizar</button>

                      </td>

                    </tr>
                <?php
                  }
                } else {
                  echo "<script> alert('Ningún error fue encontrado');</script>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
  <script>
    $(document).ready(function() {
      $('.updateBtn').on('click', function() {

        $('#viewModal').modal('show');

        // Obtiene los datos de la fila de la tabla.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        $('#codigo').val(data[0]);
        $('#nombres').val(data[1]);
        $('#tipodoc').val(data[2]);
        $('#documento').val(data[3]);
        $('#telefono').val(data[4]);;
        $('#correo').val(data[5]);
        $('#direccion').val(data[6]);
        $('#fecha_registro').val(data[7]);
      });

    });
  </script>
</body>
<?php include("include/footer.php") ?>