<?php include("template/cabecera.php"); ?>


<?php
  

  #  Valores  Partida en Curso para la Peña 
  $idPartida = 1;
  $fechaPartida = $fechaHoy ;
  $TitlePartidaEnCurso =  $idPartida."_".$fechaPartida."_".$penya;
?>


<div class="card" style="width: 18rem;">
  <div class="card-header bg-info">
    Crear Partida <?php echo ($fechaHoy); ?>
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">
      <h5>Peña <?php echo ($penya)?></h5>
    </li>
     
    <li class="list-group-item">
      <div class="input-group">
        <span class="input-group-text" id="basic-perdidas">Perdidas:</span>
        <input type="number" class="form-control form-control-sm"  id="perdidas" placeholder="4" aria-describedby="basic-perdidas">
      </div>
    </li>
    <li class="list-group-item">
      <div class="input-group">
        <span class="input-group-text" id="basic-precio">Precio:</span>
        <input type="number" class="form-control form-control-sm"  id="precio" placeholder="10" aria-describedby="basic-precio">
      </div>
    </li>
    <li class="list-group-item">
      <div class="input-group">
        <span class="input-group-text" id="basic-Jugadores"># Jugadores:</span>
        <input type="number" class="form-control form-control-sm"  id="NumJugadores" placeholder="6" aria-describedby="basic-Jugadores">
      </div>
    </li>
    <?php if ($TitlePartidaEnCurso) { # Negar   esto es una Prueba if (!$TitlePartidaEnCurso)
            echo ('
            <li class="list-group-item">
             <button type="button" class="btn btn-success">Crear Partida</button>
              <div class="form-text">Crea la partida para poder poner las parejas</div>
            </li>
          ');
          } ?>
    
  </ul>
</div>
<hr>

<B>Partidas</B>
<?php if ($TitlePartidaEnCurso) {
            echo ('
            
         

<div class="card w-75">
  <div class="card-header">
    Partida <?php echo ($TitlePartidaEnCurso); ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <!-- Tabla para  cada Partida -->
      <table class="table table-hover table-condensed">
        <thead>
          <tr>
            <th>Parejas</th>
            <th>Perdidas</th>
            <th>Ganador</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select name="P1J1">
                <option selected>Jugador </option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>/
              <select name="P1J2">
                <option selected>Jugador </option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </td>
            <td>
              <input class="form-check-input" name="P1M1" id="P1M1" type="checkbox" value="">
              <input class="form-check-input" name="P1M2" id="P1M2" type="checkbox" value="">
              <input class="form-check-input" name="P1M3" id="P1M3" type="checkbox" value="">
              <input class="form-check-input" name="P1M4" id="P1M4" type="checkbox" value="">
            </td>
            <td>
              <input class="form-check-input" name="GANP1" id="GANP2" type="checkbox" value="">
            </td>
          </tr>
          <tr>
            <td>
              <button type="button" class="btn btn-light">Otra Pareja</button>
            </td>
            <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="basic-fin">
              <label class="form-check-label" for="basic-fin">
                Finalizar Partida
              </label>
            </div>

      
             
            </td>
            <td>
              <button type="button" class="btn btn-success">Guardar</button>
            </td>
          </tr>
        </tbody>
      </table> <!-- FIN Tabla Partida -->
    </li>
  </ul>
</div>
');
} ?>



<?php include("template/pie.php"); ?>