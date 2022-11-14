<form action="../../../back_end/controladores/boleto_controlador.php" 
action="GET" class="needs-validation" novalidate>
<input type="hidden" name="opcion" value="1">
  <div class="form-row pt-5 mt-3">
        </div>
 <div class="col-md-7 mb-7">
      <label for="validationCustom01">id</label>
      <input type="number"  step=any class="form-control" name="id" id="validationCustom01" disabled>
    </div>
 
 
    <div class="col-md-7 mb-6">
      <label for="validationCustom02">Tipo</label>
      <input type="text" class="form-control" name="tipo" id="validationCustom02"  required>
    </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Descripcion</label>
      <input type="text" class="form-control" name="descripcion" id="validationCustom02"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Precio</label>
      <input type="number" class="form-control" name="precio" id="validationCustom02"  required>
    </div>
  </div>
  <br>


  <button class="btn btn-primary" type="submit">Registrar</button>
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