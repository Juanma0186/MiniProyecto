<?php

include('php/data.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Prueba Pull Request</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="titulo">
    <h1>GRUPO MDMAJ</h1>
    <h2>Integrantes</h2>
    <ul class="integrantes">
      <!--PHP-->
      <?php

      foreach ($integrantes as $integrante) {
        echo "<li>" . $integrante . "</li>";
      }
      ?>
    </ul>
  </div>
  <div class="contenido">
    <h2>HORARIO</h2>
    <table>
      <tr>
        <th>Hora</th>
        <?php foreach ($dias as $dia) : ?>
          <th><?php echo $dia; ?></th>
        <?php endforeach; ?>
      </tr>
      <?php foreach ($horas as $hora => $clases) : ?>
        <tr>
          <td><?php echo $hora; ?></td>
          <?php foreach ($dias as $dia) : ?>
            <td>
              <?php
              echo $clases[$dia];
              ?>
            </td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
    </table>
    <div class="asignaturas">
      <!--PHP-->
      <?php

      foreach ($modulos as $sigla => $info) {
        echo  "<div class='asignatura'>" . $sigla . "<span id='$sigla'></span><br>";
        echo  $info["modulo"] . "<br>";
        echo "Profesor: " . $info["profesor"] . "<br></div>";
      }

      ?>

    </div>
  </div>

  <script src="js/script.js"></script>
</body>

</html>