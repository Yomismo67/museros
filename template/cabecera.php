<!doctype html>
<html lang="es">

<head>
  <title>Museros</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap CSS v5.2.1 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
-->
</head>
<?php
      $fechaHoy = date('d/m/Y');
      $penya = 'Museros';

      #  Valores  Partida en Curso para la Peña 
      $idPartida = 1;
      $fechaPartida = $fechaHoy ;
      $TitlePartidaEnCurso =  $idPartida."_".$fechaPartida."_".$penya;
  ?>
<body>
  <?php
  $url = "http://" . $_SERVER['HTTP_HOST'] . "/museros";
  $logado = true;
  ?>
  <div class="container col-xs-12">
    <br>
    <div class="row">
      <div class="dropdown open" data-bs-theme="dark" >
        <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo "Menu ".$penya?>
        </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
          <a class="dropdown-item" href="<?php echo ($url) ?>">Inicio</a>
          <?php if ($logado) {
            echo ('     
                <a class="dropdown-item" href="diadepartida.php">Partidas</a>
                <a class="dropdown-item" href="jugadores.php">jugadores</a>                
            ');
          } ?>
          
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="container"> 

  
  