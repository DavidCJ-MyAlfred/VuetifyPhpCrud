<?php
include('include/db.php');
// Actualizar datos en la base de datos
if (isset($_POST['update2'])) {
    $codigo = $_POST['codigo'];
    $nombres = $_POST['nombres'];
    $documento = $_POST['documento'];
    $tipodoc = $_POST['tipodoc'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    
    $sql = "UPDATE alumno SET nombres='$nombres',
                                    documento='$documento',
                                    tipodoc=' $tipodoc',
                                    correo = '$correo',
                                    telefono = '$telefono',
                                    direccion = '$direccion'
                                    WHERE codigo='$codigo'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script> alert("Datos actualizados con éxito."); </script>';
        header("Location:editarUser.php");
    } else {
        echo '<script> alert("Datos no actualizados."); </script>';
    }
}
?>
//var_dump($query);exit;