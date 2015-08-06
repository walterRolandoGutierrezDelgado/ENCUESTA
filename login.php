<?php
include("header.php");
?>
<section id="form">
    <form class="contact_form" action="php/control.php" method="post">
         <ul>
            <li>
            	<h2>Iniciar sesion</h2>
            </li>
            <h5>Emial</h5>
            <li>
            	<input type="email" name="email" placeholder="Email"required/>
            </li>
            <h5>Contraseña</h5>
            <li>
            	<input type="password" name="password" placedolder="Password" required>
            </li>
            <?php
              if (isset($_POST["email"])){
              	echo "Email incorrecto"
              } else{
                  if (isset($_POST["password"])){
              	   echo "Contraseña incorrecto";
              	   }
              }
            ?>
            <li>
            	<input type="submit" class="submit" value="Iniciar">
            </li>
            <a href="paginas1" href="javascript:window.history.back();">&laquo; Volver atras</a>
         </ul>
    	
    </form>
</section>
<?php
  include("footer.php");
?>