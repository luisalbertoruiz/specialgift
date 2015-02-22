<?php
$host="mysql.hostinger.mx";
$user="u239854871_sg";
$pass="563911";
$db="u239854871_sg";
$connect=mysql_connect($host, $user, $pass) or die ("No se pudo conectar al servidor");
mysql_select_db($db, $connect) or die ("No se encontro la BD");
?>
