<?php
	session_start();
	require_once("./config.php");

	if((!isset($_POST["user"])) || (empty($_POST["user"])) || (!isset($_POST["password"])) || (empty($_POST["password"])) || (!isset($_POST["first_name"])) || (empty($_POST["first_name"])) || (!isset($_POST["name"])) || (empty($_POST["name"])) || (!isset($_POST["adress"])) || (empty($_POST["adress"])) || (!isset($_POST["phone_number"])) || (empty($_POST["phone_number"])) || (!isset($_POST["email"])) || (empty($_POST["email"]))) {
		header("location: ./connection_inscription.php?text=Un ou plusieurs champs sont incorrects !");
		exit();
	}
	else {
		$user=$_POST["user"];
		$password=$_POST["password"];
		$first_name=$_POST["first_name"];
		$name=$_POST["name"];
		$adress=$_POST["adress"];
		$phone_number=$_POST["phone_number"];
		$email=$_POST["email"];

		$sql="INSERT INTO admin (user,password,first_name,name,adress,phone_number,email) VALUES('".$user."','".$password."','".$first_name."','".$name."','".$adress."','".$phone_number."','".$email."')";

		if($result=mysqli_query($link,$sql)) {
			header("location: ./connection_inscription.php?text=L'utilisateur ".$user." a bien été ajouté !");
		}
		else {
			header("location: ./connection_inscription.php?text=Erreur lors de l'ajout de l'utilisateur ".$user." : veuillez revérifier les informations !");
			mysqli_close($link);
		}
	}
?>
