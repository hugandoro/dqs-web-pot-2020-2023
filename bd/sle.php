<?php

# FileName="Connection_php_mysql.htm"

# Type="MYSQL"

# HTTP="true"

$hostname_sle = "localhost";

//Servidor de produccion
//$database_sle = "dosquebr_aportes_pot";
//$username_sle = "dosquebr_dqs";
//$password_sle = "s1st3m4s";

//Servidor de pruebas
$database_sle = "dqs_aportes_pot";
$username_sle = "root";
$password_sle = "";

$sle = mysqli_connect($hostname_sle, $username_sle, $password_sle) or trigger_error(mysql_error(),E_USER_ERROR); 
mysqli_select_db($sle, $database_sle);

?>