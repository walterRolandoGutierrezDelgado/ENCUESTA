<?php 
include ("header.php");
$titulo = $_POST["titulo"];
$preguntas = $_POST["preguntas"];

 ?>}
 <sectio id="form">
    <form action="php/insetarPregunta.php>" 
    class="contact_form" method="post">
        <h3><?php echo $titulo; ?></h3>
        <table>
        	<?php
        	for($i=1; $i<=$preguntas ; $i++){

        	? >
        	<tr>
        	   <td>preguntas <?php echo $i ;?></td>
        	   <td><imput name="<?phpecho $i;?>"type="text" size ="50
        	   "maxlength="50"></td>
        	</tr>
        </table>>
    </form>
 </section>

