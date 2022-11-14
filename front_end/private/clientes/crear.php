<form action="../../../back_end/controladores/cliente_controlador.php" 
action="GET" class="needs-validation" novalidate>
<input type="hidden" name="opcion" value="1">
  <div class="form-row pt-5 mt-3">
        </div>
 <div class="col-md-7 mb-7">
      <label for="validationCustom01">Id</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" disabled>
    </div>
 
 
    <div class="col-md-7 mb-6">
      <label for="validationCustom02">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="validationCustom02"  required>
    </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Apellido Paterno</label>
      <input type="text" class="form-control" name="apellido1" id="validationCustom02"  required>
    </div>
  </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Apellido Materno</label>
      <input type="text" class="form-control" name="apellido2" id="validationCustom02"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Correo</label>
      <input type="text" class="form-control" name="correo" id="validationCustom02"  required>
    </div>
  </div>
  
  <fieldset class="form-group">
    <div class="col-md-7 mb-7">
      <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="masculino"  required>
          <label class="form-check-label" for="gridRadios1">
            Masculino
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="femenino" required>
          <label class="form-check-label" for="gridRadios2">
            Femenino
          </label>
        </div>

    </div>  </fieldset>
      

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Clave</label>
      <input type="text" class="form-control" name="clave" id="validationCustom02"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Fecha de Nacimiento</label>
      <input type="text" class="form-control" name="fecha" id="validationCustom02" placeholder="dd/mm/aaaa"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Foto</label>
      <input type="text" class="form-control" name="foto" id="validationCustom02"  required>
     </div>
  </div>

  <div class="col-md-3 mb-3">
  <label for="validationDefault02">Estatus</label>
      <select class="custom-select" id="estatus" name="estatus" required>
        <option selected disabled value="">Selecciona...</option>
        <option>Activo</option>
        <option>Inactivo</option>
      </select>
    </div>
      </div>


  <button class="btn btn-primary" type="submit">Registrarse</button>
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