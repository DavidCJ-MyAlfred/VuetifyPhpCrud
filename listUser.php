<?php include("include/header.php") ?>
<?php include("include/db.php") ?>

<body>
    <div id="listUser.php">
        <div class="modal fade" id="viewModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <!-- cabecera del modal -->
                    <div class="modal-header" style="background-color:#26a0da;border-color:#26a0da;">
                        <h4 class="modal-title mdi mdi-account-search text-white">Informacion detallada</h4>
                        <button type="button" class="close mdi mdi-close-circle" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <!-- cuerpo del modal -->
                    <div class="modal-body">
                        <form action="dataUpdate.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text mdi mdi-account-box-outline text-white" style="background-color:#8e9eab;">NOMBRES:</div>
                                        </div>
                                        <input type="text" class="form-control" name="nombres" id="nombres" disabled>
                                    </div>
                                </div>
                                <br />
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text mdi mdi-layers text-white" style="background-color:#8e9eab">TIPO DE DOCUMENTO:</label>
                                        </div>
                                        <select class="custom-select" name="tipodoc" id="tipodoc" disabled>
                                            <option selected>Seleccioné...</option>
                                            <option id="tipodoc" value=0>TI</option>
                                            <option id="tipodoc" value=1>CC</option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text mdi mdi-folder-account text-white" style="background-color:#8e9eab">DOCUMENTO:</div>
                                        </div>
                                        <input type="text" class="form-control" name="documento" id="documento" disabled>
                                    </div>
                                </div>
                                <br />
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text mdi mdi-cellphone text-white" style="background-color:#8e9eab">TELEFONO:</div>
                                        </div>
                                        <input type="text" class="form-control" name="telefono" id="telefono" disabled>
                                    </div>
                                </div>
                                <br />
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text mdi mdi-gmail text-white" style="background-color:#8e9eab">CORREO:</div>
                                        </div>
                                        <input type="text" class="form-control" name="correo" id="correo" disabled>
                                    </div>
                                </div>
                                <br />
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text mdi mdi-google-maps text-white" style="background-color:#8e9eab">DIRECCION:</div>
                                        </div>
                                        <input type="text" class="form-control" name="direccion" id="direccion" disabled>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- pie del modal -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mdi mdi-exit-to-app" data-dismiss="modal">Cerrar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="card text-center m-5" style="border-color:#26a0da;">
        <div class="card-header mdi mdi-clipboard-account text-white" style="background-color: #26a0da;border-color:#26a0da;">
            Listado de alumnos
        </div>
        <div class="card-body">
            <h5 class="card-title">Los siguientes son los datos guardados hasta el momento y en cual puede obtener una información detallada de cada alumno:</h5>
        </div>
        <div class="card text-center m-5">
            <div class="card-header" style="background-color:#26a0da">
                <div class="container">
                    <div class="table-responsive-lg border-info">
                        <table class="table border-info">
                            <thead class="bg-secondary text-white">
                                <tr bgcolor="#26a0da" style="border-color:#26a0da;">
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
                                                <button type="button" class="btn viewBtn mdi mdi-account-search" style="background-color:#26a0da" data-toggle="modal" data-id="id" data-target="viewModal">Ver detalle</button>
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

    <script>
        $(document).ready(function() {
            $('.viewBtn').on('click', function() {

                $('#viewModal').modal('show');

                // Obtiene los datos de la fila de la tabla.
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                $('#codigo').val(data[0]);
                $('#nombres').val(data[1]);
                $('#tipodoc #option').val(data[2]);
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