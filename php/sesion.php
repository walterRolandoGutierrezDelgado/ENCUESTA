<?php
session_start();
if (!$_SESSION["autentificado"]){
	header("Location: Salir.php");
}
?>
