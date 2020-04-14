  <?php include("include/db.php")?>

<?php

if(isset($_GET['delete'])){
        $codigo = $_GET['codigo'];
        $query = "DELETE FROM alumno WHERE codigo = $codigo";
        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            die("El query para eliminar falló");
        }
        else{
            ?>
            <script>alert("Registro Eliminado");</script>
            <?php 
        }
    }
    //si quisiera redireccionar a eliminarUser directamente:
 ?>
    <script>
    window.location = "eliminarUser.php";
    </script>