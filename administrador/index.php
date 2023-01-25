<?php
if ($_POST) {
  header("location:inicio.php");
}

?>
<?php include "template/cabecera.php"; ?>

<br> <br>
<div class="container">
  <div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <img src="./../img/museros.jpg" width="40" height="40" class="img-fluid" alt="Museros">
          Login
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="form-group">
              <label for="inputName" class="col-form-label">Usuario</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-form-label">Contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
              </div>
            </div>
            <br>
            <div class="form-group">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include "template/pie.php"; ?>