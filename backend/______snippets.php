<!-- Mandar array a sql con while y explode  -->

<?php

include "config.php";

// Indexed Array
$names_arr = array("Yogesh singh","Sonarika Bhadoria","Vijay Maurya");

// Separate Array by " , "
$names_str = implode(" , ",$names_arr);

// Insert record
$sql = "INSERT INTO contents_arr(name) VALUES('".$names_str."')";
mysqli_query($con,$sql);

// Read record
$sql = mysqli_query($con,"SELECT * FROM contents_arr");
while($row = mysqli_fetch_assoc($sql)){
 
   $name = $row['name'];
   $name_explode = explode(" , ",$row['name']);  

   echo "name : ".$name."<br>";
   echo "<pre>";
   print_r($name_explode);
   echo "</pre>";
}

?>
<!-- Mandar array a sql con while -->
<?php




include "config.php";

// Associative Array
$users_arr[] = array("username"=>"yssyogesh","name"=>"Yogesh singh");
$users_arr[] = array("username"=>"bsonarika","name"=>"Sonarika Bhadoria");
$users_arr[] = array("username"=>"vijay","name"=>"Vijay Maurya");

// Insert record
foreach($users_arr as $userid=>$user){

   $username = $user['username'];
   $name = $user['name'];

   $sql = "INSERT INTO contents_arr(username,name) VALUES('".$username."','".$name."')";
   mysqli_query($con,$sql);

}

// Read record
$sql = mysqli_query($con,"SELECT * FROM contents_arr");

while($row = mysqli_fetch_assoc($sql)){
   $username = $row['username'];
   $name = $row['name'];

   echo "username : ".$username.", name : ".$name."<br>";
}

?>
<!-- Mandar array a sql con while asociativo -->
<?php

include "config.php";

// Indexed Array
$names_arr = array("Yogesh singh","Sonarika Bhadoria","Vijay Maurya");

// Associative Array
$users_arr[] = array("username"=>"yssyogesh","name"=>"Yogesh singh");
$users_arr[] = array("username"=>"bsonarika","name"=>"Sonarika Bhadoria");
$users_arr[] = array("username"=>"vijay","name"=>"Vijay Maurya");

// Serialize the Array
$names_str = serialize($names_arr);
$users_str = serialize($users_arr);

// Insert record
$sql = "INSERT INTO contents_arr(arr_serialize1,arr_serialize2) VALUES('".$names_str."','".$users_str."')";
mysqli_query($con,$sql); 

// Read record
$sql = mysqli_query($con,"SELECT * FROM contents_arr");
while($row = mysqli_fetch_assoc($sql)){
   
   // Unserialize
   $arr_unserialize1 = unserialize($row['arr_serialize1']);
   $arr_unserialize2 = unserialize($row['arr_serialize2']);
   
   // Display
   echo "<pre>";
   print_r($arr_unserialize1);
   print_r($arr_unserialize2);
   echo "</pre>";
}

?>
<!-- Envio a bunker -->

<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://ar.eagle-latam.com/api/v4/consumers',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => "{
        \"nombre_del_service\": \"$nombre_del_service\",\r\n

        \"first_name\": \"$first_name\",\r\n
        \"last_name\": \"$last_name\",\r\n
        \"email\": \"$email\",\r\n
        \"cuit_cuil_dni\": \"$cuit_cuil_dni\",\r\n
        \"birthday\": \"$birthday\",\r\n
        \"address_state\": \"$address_state\",\r\n
        \"cellphone\": \"$cellphone\",\r\n
        \"talle_de_ropa\": \"$talle_de_ropa\",\r\n
        \"estas_incluido_en_las_listas_de_whatsapp_del_cts\": \"$estas_incluido_en_las_listas_de_whatsapp_del_cts\",\r\n
        \"sos_miembro_del_grupo_de_facebook_del_cts\": \"$sos_miembro_del_grupo_de_facebook_del_cts\",\r\n
        \"usas_instagram_como_red_social\": \"$usas_instagram_como_red_social\",\r\n
        \"cual_es_tu_funcion_en_el_service\": \"$cual_es_tu_funcion_en_el_service\",\r\n 

        \"localidad_del_service\": \"$localidad_del_service\",\r\n
        \"address_postal_code\": \"$address_postal_code\",\r\n
        \"address\": \"$address\",\r\n
        \"phone\": \"$phone\",\r\n
        \"email_oficial\": \"$email_oficial\",\r\n
        \"cantidad_de_personal\": \"$cantidad_de_personal\",\r\n
        \"taller_y_local_o_solo_taller\": \"$taller_y_local_o_solo_taller\",\r\n
        \"reparacion_venta_de_repuestos_o_electrodomesticos\": \"$reparacion_venta_de_repuestos_o_electrodomesticos\",\r\n
        \"que_reparan\": \"$que_reparan\",\r\n
        \"de_que_marcas_es_service_oficial\": \"$de_que_marcas_es_service_oficial\",\r\n
    

        \"mayor_18_anos\": \"$mayor_18_anos\",\r\n
	\"allow_global\": \"$allow_global\",\r\n
	\"allow_brand\": \"$allow_brand\"\r\n 

}",

    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: Bearer  4e58a5399495ff5e41171b94e2fa05894cd5d5c6" 
        // OK! ctskip
  
        
    ) ,
));

$response = curl_exec($curl);

curl_close($curl);