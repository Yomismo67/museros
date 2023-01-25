<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if (! $error) {
    $error = 'Oops! La has cagado..';
}
  include("template/cabecera.php"); ?>
        <h1>Problema</h1>
        <div class="alert alert-primary" role="alert">
          <h4 class="alert-heading">Error</h4>
          <p><?php echo $error; ?></p>    
          <hr>
          <p class="mb-0"><a href="<?php echo ($url) ?>">Inicio</a></p>       
        </div> 
<?php include("template/pie.php"); ?>

 