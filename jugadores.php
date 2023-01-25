<?php include("template/cabecera.php");  
include_once 'includes/db_connect.php';

$fechaHoy = date('d/m/Y');
$currentroles = PENYA_ADMIN;
$idpenya =1;

$statement = "SELECT id,nombre,penya,notas   FROM jugador" ;

if ($currentroles != GLOBAL_ADMIN) 
{
  $statement =$statement ." WHERE idpenya = $idpenya ";
}

if ($stmt = $mysqli->prepare($statement)) {
  // Execute the prepared query. 
  $stmt->execute();
  $stmt->store_result();

  // Vinculamos unas variables a los resultados con el método bind_result() de stmt,
  // antes de llamar al método fetch() de stmt
  $stmt->bind_result($campoid, $camponombre, $campopenya, $camponotas);
?>
  <table class="table">
    <thead>
      <tr>
        <?php
        if ($currentroles == GLOBAL_ADMIN) {
          echo ('<th>Id</th>
            <th>Nombre</th>
            <th>Peña</th>
            <th>Notas</th>');
        } else {
          echo ('<th>Jugador</th>
          <th>Partidas</th>
          <th>Ganadas</th>
          <th>Resultado</th>');
        }
        ?>
      </tr>
    </thead>
    <tbody>
      <?php

      while ($stmt->fetch()) {
        if ($currentroles == GLOBAL_ADMIN) {
          echo '
              <tr>
                <td>' . $campoid . '</td>
                <td>' . $camponombre . '</td>
                <td>' . $campopenya . '</td>
                <td>' . $camponotas . '</td>
              </tr>
           ';
        } else {
          echo '
              <tr>
                <td>(' . $campoid . ')' . $camponombre . '</td>
                <td>10</td>
                <td>1</td>
                <td>Ganado-Perdido</td>
              </tr>';
        }
      }
      ?>

    </tbody>
  </table>


<?php




  // Liberamos el resultado.
  $stmt->free_result();

  // Cerramos la sentencia preparada.
  $stmt->close();

  // Cerramos conexión
  $mysqli->close();
} else {
  // Could not create a prepared statement
  header("Location: ../error.php?err=Database error: cannot prepare statement");
  exit();
}


?>

<?php include("template/pie.php"); ?>