<?php


$datosarray = $_REQUEST;


var_dump($datosarray);


$first_name = $datosarray['first_name'];
$last_name = $datosarray['last_name'];
$email = $datosarray['email'];




include "config.php";
$sql = "INSERT INTO test(
    first_name,last_name,email) 
    VALUES(
    '".$first_name."','".$last_name."','".$email."')";

mysqli_query($con,$sql);




echo "Resultado : <br>";

foreach($datosarray as $llave => $valor) {
    echo $llave . ' = ' . $valor . PHP_EOL;
    echo "<br>";



}







 
