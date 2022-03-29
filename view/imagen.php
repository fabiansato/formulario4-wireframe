<?php
$filename3 = 'data/textoform.json';
$data3 = file_get_contents($filename3);
$footer = json_decode($data3);

?>
<div class="left-wrapper">
     
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="productoDesktop">

       
               <img srcset="assets/img/desktop.png 320w,
               assets/img/desktop.png,
               assets/img/desktop.png 1300w"
       sizes="(max-width: 320px) 280px,
              (max-width: 480px) 440px,
              1300px"
       src="assets/img/desktop.png" class="logoDesktop" alt="<?php echo $footer[0]->altimagen?>">
                  </div>
                </div>
               
   
              </div>

            