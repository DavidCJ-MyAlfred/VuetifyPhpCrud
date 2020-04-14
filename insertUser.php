<?php

include("include/db.php");

if(isset($_POST['insertUser'])){
    $nombres = $_POST['nombres'];
    $tipodoc = $_POST['tipodoc'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    echo $title;
    echo $description;

    $querry ="INSERT INTO alumno(nombres,tipodoc,documento,correo,telefono,direccion) VALUES ('$nombres','$tipodoc','$documento','$correo','$telefono','$direccion')";
    $result =mysqli_query($conn, $querry);

    if(!$result){
        die("Query fallo");
    }

    $_SESSION['menssage']='Registro guardado con éxito';
    $_SESSION['mesage_type']= 'Satisfactorio';

    header("Location: agregarUser.php");
}

?>