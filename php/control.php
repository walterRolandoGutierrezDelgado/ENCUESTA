<?php
include('conexion.php');
$usuarioIng=$_POST['pass'];
$consulta=mysql_query("SELECT * FROM login");
 $filas=mysql_fetch_array($consulta);


      $usuario=$filas['email'];
      $pass=$filas['pass'];


   if ($email=$_POST['email']!==$usuario){

       $email=$_POST['email'];
       echo $email;
       ?>
        <form name="formulario" method="post" action="../login.php">
         	<input type="hidden" name="email" value="<?php echo $email; ?>">
         </form>
         <?php

        }else{
       	 if ($pasword=$_POST['password']!==$pass)
     	 	?>
     	<form name="formulario" method="post" action="../login.php">
     	    <input type="hidden" name="password" value="<?php echo $password;?>">
     	 </form>

            <?php
           
        	
        	// declaro mis variables de session
            $_SESSION["autentificado"] = true;
            $_SESSION["usuario"] = $_POST['email'];
            header("location: ../crearEncuesta.php?entrar=si");
            
     }
  ?>
  
  <script type="text/javascript">
          document.formulario.submit();
  </script>