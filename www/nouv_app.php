<?php
    require_once("./fonction.php");
    check_session();
    require_once("./config.php");

if(isset($_POST['menu_cat']))
{
    $sql="SELECT * FROM admin WHERE user='".$_SESSION["username"]."'";
    $result=mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    $iduser=$row["index_id"];
    extract($_POST);

    if (!empty($nom_app))
    {
        global $db;

        $cat = $_POST['menu_cat'];
        if ($cat == "camera")
        {
            $cat = 1;
        }
        elseif ($cat == "thermostat")
        {
            $cat = 2;
        }
        elseif ($cat == "eclairage")
        {
            $cat = 3;
        }
        elseif ($cat == "aspirateur")
        {
            $cat = 4;
        }

        $sql="INSERT INTO appareil(nom_app,statut,id_cat,id_user) VALUES('".$nom_app."',0,'".$cat."','".$iduser."')";

        if($result=mysqli_query($link,$sql)) {
			header("location: ./mes_appareils.php?text=L'appareil ".$nom_app." a bien été ajouté !");
		}
		else {
			header("location: ./connection_inscription.php?text=Erreur lors de l'ajout de l'appareil ".$nom_app." : veuillez revérifier les informations !");
			mysqli_close($link);
		}
    
    }
    else{
        header("location: ./addApp.php?text=les champs ne sont pas tous remplis");
    }
}
else{
    header("location: ./addApp.php?text=problème lors de l'ajout");
}
?>