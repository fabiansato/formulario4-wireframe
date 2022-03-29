<?php

    $error = '';

    // declaración de variables
    $nombre_del_service = '';
    $first_name = '';
    $last_name = '';
    $email = '';
    $cuit_cuil_dni = '';
    $birthday = '';
    $address_state = '';
    $cellphone = '';
    $talle_de_ropa = '';
    $estas_incluido_en_las_listas_de_whatsapp_del_cts = '';
    $sos_miembro_del_grupo_de_facebook_del_cts = '';
    $usas_instagram_como_red_social = '';
    $cual_es_tu_funcion_en_el_service = '';


    $localidad_del_service = '';
    $address_postal_code = '';
    $direccion_del_service = '';
    $telefono_del_service = '';
    $email_oficial = '';
    $cantidad_de_personal = '';
    $taller_y_local_o_solo_taller = '';
    $reparacion_venta_de_repuestos_o_electrodomesticos = '';
    $que_reparan = '';
    $de_que_marcas_es_service_oficial = '';

    $mayor_18_anos = '';
    $allow_global = '';
    $allow_brand = '';



    //datos que recibe del cliente:
    $nombre_del_service = $_POST["nombre_del_service"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $cuit_cuil_dni = $_POST["cuit_cuil_dni"];
    $birthday = $_POST["birthday"];
    $address_state = $_POST["address_state"];
    $cellphone = $_POST["cellphone"];
    $talle_de_ropa = $_POST["talle_de_ropa"];
    $estas_incluido_en_las_listas_de_whatsapp_del_cts = $_POST["estas_incluido_en_las_listas_de_whatsapp_del_cts"];
    $sos_miembro_del_grupo_de_facebook_del_cts = $_POST["sos_miembro_del_grupo_de_facebook_del_cts"];
    $usas_instagram_como_red_social = $_POST["usas_instagram_como_red_social"];
    $cual_es_tu_funcion_en_el_service = $_POST["cual_es_tu_funcion_en_el_service"];

    
    $cual_es_tu_funcion_en_el_service = $_POST["cual_es_tu_funcion_en_el_service"];
    $localidad_del_service = $_POST["localidad_del_service"];
    $address_postal_code = $_POST["address_postal_code"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email_oficial = $_POST["email_oficial"];
    $cantidad_de_personal = $_POST["cantidad_de_personal"];
    $taller_y_local_o_solo_taller = $_POST["taller_y_local_o_solo_taller"];
    $reparacion_venta_de_repuestos_o_electrodomesticos = $_POST["reparacion_venta_de_repuestos_o_electrodomesticos"];
    $que_reparan = $_POST["que_reparan"];



//validar mayor18
if (isset($_POST["mayor_18_anos"]))
{
    $mayor_18_anos = $_POST["mayor_18_anos"];
    if ($mayor_18_anos == 1)
    {
        $mayor_18_anos = 1;
    }
    else
    {
        $mayor_18_anos = 0;

    }
}

//validar allow brand
if (isset($_POST["allow_brand"]))
{
    $allow_brand = $_POST["allow_brand"];
    if ($allow_brand == 1)
    {
        $allow_brand = 1;
    }
    else
    {
        $allow_brand = 0;
    }
}

//validar allow global
if (isset($_POST["allow_global"]))
{
    $allow_global = $_POST["allow_global"];
    if ($allow_global == 1)
    {
        $allow_global = 1;
    }
    else
    {
        $allow_global = 0;
    }
}


include ("conectar.php");

    //datos enviados a la base de datos
    mysqli_query($conexion, "INSERT INTO `ctskip` (
`nombre_del_service`,
`first_name`,
`last_name`,
`email`,
`cuit_cuil_dni`,
`birthday`,
`address_state`,
`cellphone`,
`talle_de_ropa`,
`estas_incluido_en_las_listas_de_whatsapp_del_cts`,
`sos_miembro_del_grupo_de_facebook_del_cts`,
`usas_instagram_como_red_social`,
`cual_es_tu_funcion_en_el_service`,

`localidad_del_service`,
`address_postal_code`,
`address`,
`phone`,
`email_oficial`,
`cantidad_de_personal`,
`taller_y_local_o_solo_taller`,
`reparacion_venta_de_repuestos_o_electrodomesticos`,
`que_reparan`,
`de_que_marcas_es_service_oficial`,




`mayor_18_anos`,
`allow_global`,
`allow_brand`
) VALUES(
'$nombre_del_service',
'$first_name',
'$last_name',
'$email',
'$cuit_cuil_dni',
'$birthday',
'$address_state',
'$cellphone',
'$talle_de_ropa',
'$estas_incluido_en_las_listas_de_whatsapp_del_cts',
'$sos_miembro_del_grupo_de_facebook_del_cts',
'$usas_instagram_como_red_social',
'$cual_es_tu_funcion_en_el_service',
'$localidad_del_service',
'$address_postal_code',
'$address',
'$phone',
'$email_oficial',
'$cantidad_de_personal',
'$taller_y_local_o_solo_taller',
'$reparacion_venta_de_repuestos_o_electrodomesticos',
'$que_reparan',
'$de_que_marcas_es_service_oficial',




'$mayor_18_anos',
'$allow_global',
'$allow_brand')");

//datos enviados al mail
//datos enviados a BunkerDB
/*
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
echo $response;
*/
//sleep(2);
//header("Location: ../exito.html");

?>
