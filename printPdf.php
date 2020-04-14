<?php
require_once 'include/db.php';

use Dompdf\Dompdf;
?>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    td.a {
      text-align: right;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <table width='100%' style="background-color: #D7DDE8;border-color:#D7DDE8;">
    <tr>
      <th>Listado de alumnos</th>
    </tr>
  </table>
  <table width='100%'>
    <tr style="background-color: #26a0da;border-color:#26a0da;">
      <th>NOMBRES</th>
      <th>TIPO DOC</th>
      <th>DOCUMENTO</th>
      <th>TELEFONO</th>
      <th>CORREO</th>
      <th>DIRECCIÓN</th>
    </tr>
    <?php

    $sql = "SELECT * FROM alumno";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_row($result)) {
    ?>
      <tr>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><?php echo $row[4] ?></td>
        <td><?php echo $row[5] ?></td>
        <td><?php echo $row[6] ?></td>
      </tr>
    <?php
    }
    ?>
  </table>