<?php
include('conexion.php');
$usuarioIng=$_POST['pass'];
$consulta=mysql_query("SELECT * FROM login");
 $filas=mysql_fetch_array($consulta);


      $usuario=$filas['email'];
      $pass=$filas['pass'];


   if ($email=$_POST['email']!==$usuario){

       $email=$_POST['email'];
       ?>
         <form name="formulario" method="post" action="../login.php">
         	<input type="hidden" name="email" value="<?php echo $email; ?>">
         </form>
         <?php

     }else {
     	 if ($password=$_POST['password']!==$usuario)
     	 	?>
     	 <form name="formulario" method="post">
     } 