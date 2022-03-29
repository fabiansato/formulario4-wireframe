<?php
$filename3 = 'data/textoform.json';
$data3 = file_get_contents($filename3);
$footer = json_decode($data3);

$filename2 = 'data/finalizado.json';
$data2 = file_get_contents($filename2);
$finalizado = json_decode($data2);


?>



<div class="contact-form-wrapper">
  <div class="row">
    <div class="productoMobile animate__animated animate__fadeInDown animate__delay-1s">

      <img src="assets/img/producto_movil.webp" class="imagenMobile" alt="<?php echo $footer[0]->altimagen?>">

    </div>

    <div class="section-title mb-40">
      <br /><br /><br /><br /><br />
      <h1 class="mb-15 animate__animated animate__fadeInDown animate__delay-1s" style="font-size:3em; padding-bottom: 20px;"><?php echo $finalizado[0]->h1?>
      </h1>

     <!--  <h2 class="mb-15 animate__animated animate__fadeInDown animate__delay-1s" style="font-size:2.5em">Los esperamos en
        el próximo sorteo de Dove.</h2>-->
      <h3 class="mb-15 animate__animated animate__fadeInDown animate__delay-1s" style="font-size:2em; padding-bottom: 20px;"><?php echo $finalizado[0]->h2?></h3>
          <h3 class="mb-15 animate__animated animate__fadeInDown animate__delay-1s" style="font-size:2em; padding-bottom: 20px;"><?php echo $finalizado[0]->h3?></h3><br/>
    </div>
<br />
    <div class="col-md-12">
      <div class="PromotigoSubmit btn btn-primary">
        <button onclick="location.href='<?php echo $finalizado[0]->url?>'" type="submit" class="button radius-10"><b><?php echo $finalizado[0]->textoboton?></b> </button>
      </div>
    </div>

    <div class="row justify-content-center text-center">
      <div class="col-s-12 justify-content-center text-center">
        <b data-bs-toggle="modal" data-bs-target="#exampleModal">
          <u class="nombreLabels text-center" style="text-align:center;" >
            <br /><br />
           <a href="https://www.rexona.com/ar/basesycondiciones/alenta-a-river/" target="_blank"> Ver bases y condiciones<a></u>
        </b>
      </div>
    </div>

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




<!--
     <p class="text-light" id="demo"></p>
<button onclick="completeRegistration()">TESTEAR PIXELS</button>
    -->