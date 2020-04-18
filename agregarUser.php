<?php include("include/header.php") ?>
<?php include("include/db.php") ?>

<body>
    <div id="agregarUser.php">
        <div class="modal fade" id="dialogo1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <!-- cabecera del modal -->
                    <div class="modal-header" style="background-color:#396afc;border-color:#396afc;">
                        <h4 class="modal-title mdi mdi-account-plus text-white">Registrar alumnos</h4>
                        <button type="button" class="close mdi mdi-close-circle" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" </span> </button> </div> <!-- cuerpo del modal -->
                                <div class="modal-body">
                                    <form action="insertUser.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text mdi mdi-account-box-outline text-white" style="background-color:#8e9eab;">NOMBRES:</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="nombres" placeholder="Ingrese sus nombres" required>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text mdi mdi-layers text-white" style="background-color:#8e9eab">TIPO DE DOCUMENTO:</label>
                                                    </div>
                                                    <select class="custom-select" name="tipodoc">
                                                        <option selected>Seleccioné...</option>
                                                        <option name="tipodoc" text="TI">TI</option>
                                                        <option name="tipodoc" text="CC">CC</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text mdi mdi-folder-account text-white" style="background-color:#8e9eab">DOCUMENTO:</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="documento" placeholder="Ingrese # documento" required>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text mdi mdi-cellphone text-white" style="background-color:#8e9eab">TELEFONO:</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="telefono" placeholder="Ingrese su telefono" required>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text mdi mdi-gmail text-white" style="background-color:#8e9eab">CORREO:</div>
                                                    </div>
                                                    <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo" required>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text mdi mdi-google-maps text-white" style="background-color:#8e9eab">DIRECCION:</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="direccion" placeholder="Ingrese sus nombress" required>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- pie del modal -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mdi mdi-exit-to-app" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-success" style="background-color:#396afc;border-color:#000000;" name="insertUser">Registrar</button>
                                </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="card text-center m-5" style="border-color:#396afc;">
        <div class="card-header mdi mdi-account-plus text-white" style="background-color: #396afc;">
            Registrar alumnos
        </div>
        <div class="card-body">
            <h5 class="card-title">Los siguientes son los datos guardados hasta el momento:</h5>
            <div class="card text-center m-5">
                <div class="card-header" style="background-color:#396afc;">
                    <div class="container">
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary mdi mdi-account-plus" style="border-color:#000000;" data-toggle="modal" data-target="#dialogo1">Registrar alumnos</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-center m-5">
                <div class="card-header" style="background-color:#396afc">
                    <div class="container">
                        <div class="table-responsive-lg border-primary">
                            <table class="table border-primary">
                                <thead class="bg-secondary text-white">
                                    <tr bgcolor="#396afc">
                                        <th>CODIGO</th>
                                        <th>NOMBRES</th>
                                        <th>TIPO DOC</th>
                                        <th>DOCUMENTO</th>
                                        <th>TELEFONO</th>
                                        <th>CORREO</th>
                                        <th>DIRECCIÓN</th>
                                        <th>FECHA REGISTRO</th>
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
    <?php include("include/footer.php") ?>