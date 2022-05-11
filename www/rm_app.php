<?php
    require_once("./fonction.php");
    check_session();
    require_once("./config.php");

if(isset($_POST['nom_app']))
{
    $sql="SELECT * FROM admin WHERE user='".$_SESSION["username"]."'";
    $result=mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    $iduser=$row["index_id"];
    extract($_POST);

    if (!empty($nom_app))
    {
        $sql="DELETE FROM appareil WHERE id_user = ".$iduser." AND nom_app = '".$nom_app."'";

        if($result=mysqli_query($link,$sql)) {
			header("location: ./mes_appareils.php?text=L'appareil ".$nom_app." a bien été supprimé !");
		}
		else {
			header("location: ./RemoveApp.php.php?text=Erreur lors de la suppression de l'appareil ".$nom_app." : veuillez revérifier les informations !");
			mysqli_close($link);
		}
    
    }
    else{
        header("location: ./RemoveApp.php?text=les champs ne sont pas tous remplis");
    }
}
else{
    header("location: ./RemoveApp.php?text=problème lors de la suppression");
}
?>