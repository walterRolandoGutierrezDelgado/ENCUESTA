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
				<input type="number" name="preguntas" placeholder="Preguntas" min="0" 
				max="5" required/>
			</li>
			 <script>
        $(function(){
        	var pul =$('#pull')
        	menu = $('nav ul');
        	menuHeight = menu.menu.height();
        	$(pull).on('click',function(e){
        		e.preventDefault();
        		menu.slideTogglr();
        	});
        });
    </script>
			<li>
			  <input type="submit" class="submit" value="crear"/>
			</li>
		</ul>>
	</form>
</section>>
<?php
  include("footer.php");
?>