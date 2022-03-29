<form class="row g-3 needs-validation"  action ='./backend/analisis.php' novalidate>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label"><b>Nombre *</b></label>
    <input type="text" name="first_name" class="form-control" id="validationCustom01"  required>
    <div class="valid-feedback">
      ¡Se  vé bien!
    </div>
    <div class="invalid-feedback">
        Por Favor ingresá tu nombre
      </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label"><b>Apellido*</b></label>
    <input type="text" name="last_name" class="form-control" id="validationCustom02"  required>

    <div class="valid-feedback">
      ¡Se  vé bien!
    </div>
    <div class="invalid-feedback">
        Por Favor ingresá tu apellido
      </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label"><b>Email*</b></label>
    <div class="input-group has-validation">
      <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
      <input type="text" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend">
      <div class="valid-feedback">
      ¡Se  vé bien!
    </div>
      <div class="invalid-feedback">
        Por favor ingresá tu email
      </div>
    </div>
  </div>

<!-- 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
-->


  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

<script>

    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>