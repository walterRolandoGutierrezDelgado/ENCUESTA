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
			<li>
				<label for="preguntas">N&uacute;mero de preguntas:</label>
				<input type="number" name="preguntas" placeholder="Encuesta"
				required/>
			</li>
		</ul>>
	</form>
</section>>