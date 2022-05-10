<?php
	if((isset($_POST["login"]) && !empty($_POST["login"])) && (isset($_POST["password"]) && !empty($_POST["password"]))) {
		$login=$_POST["login"];
		$password=$_POST["password"];
		require_once("./config.php");
		$sql="SELECT * FROM admin WHERE user='".$login."'";
		$result=mysqli_query($link, $sql);

		if(mysqli_num_rows($result) == 1) {
			while($row =  mysqli_fetch_array($result)) {
				if(password_verify($password,$row['password'])) {
					session_start();
					$_SESSION["username"]=$login;
					$_SESSION["logged"]=true;
				}

				else {
					session_destroy();
					header("location: ./connection_inscription.php?text=Mot de passe incorrect !");

					exit();
				}
			}
		}

		else {
			session_destroy();
			header("location: ./connection_inscription.php?text=Cet utilisateur n'existe pas !");

			exit();
		}

		mysqli_free_result($result);
		mysqli_close($link);
		header("location: ./connection_inscription.php?text=Bienvenue $login !");
		exit();
	}

	else {
		session_destroy();
		header("location: ./connection_inscription.php?text=Utilisateur ou mot de passe incorrect !");
		exit();
	}
?>
