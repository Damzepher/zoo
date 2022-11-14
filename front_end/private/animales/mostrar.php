<?php
include('../../../back_end/modelos/animal.php');
include('../../../back_end/modelos/config.php');

$conexion=new Conexion();
$con=$conexion->getConection();
$animal=new Animal($con);
$animal->id=$_GET['id'];
$animales=$animal->leer_uno_id();
$animal=$animales[0];
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
<form action="../../../back_end/controladores/animal_controlador.php" 
action="GET" class="needs-validation" novalidate>
<input type="hidden" name="opcion" value="3">
  <div class="form-row pt-5 mt-3">
        </div>
 <div class="col-md-7 mb-7">
      <label for="validationCustom01">Id</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" 
      value="<?php echo $animal->id ?>" readonly>
      <div class="valid-feedback">
        Dato validado!
      </div>
    </div>
 
 
    <div class="col-md-7 mb-6">
      <label for="validationCustom02">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="validationCustom02" 
      value="<?php echo $animal->nombre ?>" readonly>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Grupo</label>
      <input type="text" class="form-control" name="grupo" id="validationCustom02"  
      value="<?php echo $animal->grupo ?>" readonly>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>

  <fieldset class="form-group">
    <div class="col-md-7 mb-7">
      <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="macho"  readonly>
          <label class="form-check-label" for="gridRadios1">
            Macho
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="hembra" readonly>
          <label class="form-check-label" for="gridRadios2">
            Hembra
          </label>
        </div>
        </div>
        </div>

  
  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Alimentacion</label>
      <input type="text" class="form-control" name="alimentacion" id="validationCustom02" 
      value="<?php echo $animal->alimentacion ?>" readonly>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>
  
  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Foto</label>
      <input type="text" class="form-control" name="foto" id="validationCustom02" 
      value="<?php echo $animal->foto ?>" readonly>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Estatus</label>
      <input type="text" class="form-control" name="estatus" id="validationCustom02"  
      value="<?php echo $animal->estatus ?>" readonly>
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