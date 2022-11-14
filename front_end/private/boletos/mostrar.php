<?php
include('../../../back_end/modelos/boleto.php');
include('../../../back_end/modelos/config.php');

$conexion=new Conexion();
$con=$conexion->getConection();
$boleto=new Boleto($con);
$boleto->id=$_GET['id'];
$boletos=$boleto->leer_uno_id();
$boleto=$boletos[0];
?>

<head>
<?php
include_once('../plantilla/head.php');
?>
<title>Area administrativa</title>

  </head>
  <body>
    
  <header>  
  <?php
include_once('../plantilla/header.php');
 ?>
</header>

<navbar> 
 <?php
include_once('../plantilla/navbar.php');
 ?>

<main role="main" class="container">
</navbar> 

<main role="main" class="container">

   

</main><!-- /.container -->
<form action="../../../back_end/controladores/boleto_controlador.php" 
action="GET" class="needs-validation" novalidate>
<input type="hidden" name="opcion" value="3">
  <div class="form-row pt-5 mt-3">
        </div>
 <div class="col-md-7 mb-7">
      <label for="validationCustom01">Fplio</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" 
      value="<?php echo $boleto->id ?>" readonly>
      <div class="valid-feedback">
        Dato validado!
      </div>
    </div>
 
 
    <div class="col-md-7 mb-6">
      <label for="validationCustom02">Tipo</label>
      <input type="text" class="form-control" name="tipo" id="validationCustom02" 
      value="<?php echo $boleto->tipo ?>" required>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Descripcion</label>
      <input type="text" class="form-control" name="descripcion" id="validationCustom02"  
      value="<?php echo $boleto->descripcion ?>" required>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>

  
  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Precio</label>
      <input type="number" class="form-control" name="precio" id="validationCustom02" 
      value="<?php echo $boleto->precio ?>" required>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>
  <br>
  <button class="btn btn-primary" type="submit">Borrar</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<footer>
<?php
include_once('../plantilla/footer.php');
 ?>
</footer>
      
  </body>
</html>