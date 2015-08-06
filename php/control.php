<?php
include('conexion.php');
$usuarioIng=$_POST['pass'];
$consulta=mysql_query("SELECT * FROM login");
 $filas=mysql_fetch_array($consulta);


      $usuario=$filas['email'];
      $pass=$filas['pass'];


   if ($email_POST['email']!==$usuario){


   } 