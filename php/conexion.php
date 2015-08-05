<?php
$host="localhost";
$user="root";
$pass="root";
$db="system_encuestas";
$conexion=mysql_connect($host, $user, $pass) or die("No hay conexion a la base de datos");
mysql_select_db($db, $conexion) or die ("No existe la base de datos");
mysql_select_db($db, $conexion) or die ("No existe la base de datos");
?>