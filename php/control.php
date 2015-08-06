<?php
include('conexion.php');
$usuarioIng=$_POST['pass'];
$consulta=mysql_query("SELECT * FROM login");
 $filas=mysql_fetch_array($consulta);


      $nombre=$filas['nombre'];
      $usuario=$filas['usuario'];
      $pass=$filas['pass'];


   if ($_POST['user']==$usuario && $_POST['pass']==$pass){
   	
   } 