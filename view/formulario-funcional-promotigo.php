<?php
$filename3 = 'data/textoform.json';
$data3 = file_get_contents($filename3);
$footer = json_decode($data3);

?>


<div class="contact-form-wrapper">
  <div class="row">
    <div class="productoMobile animate__animated animate__fadeInDown animate__delay-1s">

      <img src="assets/img/producto_movil.webp" class="imagenMobile" alt="<?php echo $footer[0]->altimagen?>">

    </div>

    <div class="section-title mb-40" style="margin-top: 15px;">
      <h1 class="mb-15 animate__animated animate__fadeInDown animate__delay-3s"><b class="completa"><?php echo $footer[0]->h1?></b></h1>

      <h2 class="mb-16 animate__animated animate__fadeInDown animate__delay-4s" id="desktop" style="display: block;color:#fff"><?php echo $footer[0]->h2?> </h2>
      <h2 class="mb-16 animate__animated animate__fadeInDown animate__delay-4s" id="mobile" style="display: none;color:#fff"></h2>
      <p class="chiquito" style="color:#fff"><?php echo $footer[0]->camposobligatorios?></p>

    </div>
    <div id="promotigoForm"><?php echo $footer[0]->cargandopromotigo?></div>


      <!--los utm -->




      <div class="row">
        <!--  <label><b>Celular*:</b></label>-->
        <!--    <label for="validationCustom02" class="form-label"><b>Email*:</b></label>-->

   

        



        <!--
            <div class="col-sm-12 col-md-12 mt-3">
              <label for="que_te_inspiraria_a_hacer_mas_actividad_fisica" class="form-label"><b class="nombreLabels">¿Qué te
                  inspiraría a hacer más actividad física?</b></label>
              <textarea name="que_te_inspiraria_a_hacer_mas_actividad_fisica"
                placeholder="¿Qué te inspiraría a hacer más actividad física?*" minlength=3 maxlength=20 type="text"
                class="form-control" id="que_te_inspiraria_a_hacer_mas_actividad_fisica" required></textarea>

              <div class="valid-feedback">
                Se ve perfecto
              </div>
              <div class="invalid-feedback">
                ⚠️ Ingresa que te inspiraría a hacer más actividad física.
              </div>

            </div>

            <div>

    -->







            <div class="col-12 agencia">
              <p style=" font-size: 0.7em; text-align: center;" class="nombreLabels">
              <?php echo $footer[0]->laagencia?>

              </p>
            </div>



</div>



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

          } else {

            enviar();
            completeRegistration();
            cerrarformulario();

            completeRegistration();
            googleCompleteRegistration();








          }

          form.classList.add('was-validated')

        }, false)

      })
  })()
</script>

<!--
     <p class="text-light" id="demo"></p>
<button onclick="completeRegistration()">TESTEAR PIXELS</button>
    -->