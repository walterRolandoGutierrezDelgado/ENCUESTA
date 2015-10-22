<?PHP
include("php/session.php");
 include("header.php");

?>
<section id ="form">
	<form action="crearPreguntas.php" class="contact_form" method="post">
		<ul>
			<li>
				<h2>Craer encuesta</h2>
			</li>
			<li>
				<label for="titulo">Encuesta:</label>
				<input type="text" name="litulo" placeholder="Encuesta"
				required/>
			</li>
			<div class="span3">
			<div class="service-block">
				<a href="#">
				<div class="service-image b-blue">
					<i><img id="img" src="images/css.png" alt=""></i>
				</div>
				</a>
				<p>Prpgramacion en CSS</p>
			</div>
		</div>
			<li>
				<label for="preguntas">N&uacute;mero de preguntas:</label>
				<input type="number" name="preguntas" placeholder="Preguntas" min="0" 
				max="5" required/>
			</li>
			<li>
			  <input type="submit" class="submit" value="crear"/>
			</li>
		</ul>>
	</form>
</section>>
<?php
  include("footer.php");
?>