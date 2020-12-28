<?php
#$DB_HOST="localhost";
#$DB_NAME= "PORTAFOLIOWEB";
#$DB_USER= "MROMERO";
#$DB_PASS= "MROMERO0017G@";
$DB_HOST="mysql3000.mochahost.com:3306";
$DB_NAME= "cloudit1_PORTAFOLIOWEB";
$DB_USER= "cloudit1_ADMWEB";
$DB_PASS= "Cloudit2o2o";
	# conectare la base de datos
    $con=@mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
