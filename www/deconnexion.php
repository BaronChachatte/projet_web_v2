<?php
	session_start();
	session_unset();
	session_destroy();
	header("location: ./connection_inscription.php?text=Merci de votre visite !");
	exit();
?>
