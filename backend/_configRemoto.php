

<?php

$host = "db-ar-promo.unileverservices.com"; /* Host name */
$user = "ar_promounileverservDBA"; /* User */
$password = "6Sk1TbRRdIbJZ74mR6avUg=="; /* Password */
$dbname = "ar_promounileverserv_db"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}