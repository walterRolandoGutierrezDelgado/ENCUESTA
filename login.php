<?php
include("php/header.php");
?>
<section id="form">
    <form class="contact_form" action="php/control.php" method="post">
         <ul>
            <li>
            	<h2>Iniciar sesiòn</h2>
            </li>
            <h5>Email</h5>
            <li>
            	<input type="email" name="email" placeholder="Email"required/>
            </li>
            <h5>Contraseña</h5>
            <li>
            	<input type="password" name="password" placedolder="Passwoerd" required>
            </li>
            <?php
              if (isset($_POST["email"])){
              	echo "Email incorrecto"
              } else{
                  if (isset($_POST["passwoerd"])){
              	   echo "Password es incorrecto";
              	   }
              }
            ?>
            <li>
            	<input type="submit" class="submit" value="Iniciar">
            </li>
            <a href="paginas1" href="javascript:window.history.back()">&laquo; Volver atras</a>
         </ul>
    	
    </form>
</section>
<?php
  include("footer.php");
?>