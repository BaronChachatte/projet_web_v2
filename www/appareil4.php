<?php
    require_once("./fonction.php");
    check_session();
    require_once("./config.php");
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspirateur</title>
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/appareil1.css">
</head>

<body>
    <nav>
        <label class="label-burger" for="active-burger">☰</label>
        <input type="checkbox" id="active-burger">
        <div class="navbar">
            <div class="logo">
                <img class="logo-navbar" src="images/navbar/logo-navbar.png" alt="logo-navbar">
            </div>
            <div class="lien">
                <a href="index.php">Accueil</a>
                <a class="active-navbar" href="mes_appareils.php">Appareils</a>
                <a href="connection_inscription.php">Login</a>
                <a href="mon_compte.php">Compte</a>
            </div>
        </div>
    </nav>

    <div class="active-device-container">
        <div class="devices-container">
            <div class="devices">
            <?php
                $indexcategoriepage=4;
                $sql="SELECT * FROM admin WHERE user='".$_SESSION["username"]."'";
                $result=mysqli_query($link, $sql);
                $row = mysqli_fetch_array($result);
                $iduser=$row["index_id"];
                $sql="SELECT * FROM appareil WHERE id_user='".$iduser."'";
                $result1=mysqli_query($link, $sql);
                while($row =  mysqli_fetch_array($result1))
                {
                    $nomappareil=$row["nom_app"];
                    $sql="SELECT * FROM appareil WHERE id_user= ".$iduser." AND nom_app = '".$nomappareil."'";
                    $result=mysqli_query($link, $sql);
                    $ligne = mysqli_fetch_array($result);
                    $indexcategorie=$ligne["id_cat"];
                    if ($indexcategoriepage == $indexcategorie)
                    {
                        echo("<a class=\"active-device\" href=\"appareil".$indexcategorie.".php\">".$nomappareil."</a>");
                    }
                    else
                    {
                        echo("<a href=\"appareil".$indexcategorie.".php\">".$nomappareil."</a>");
                    }
                }
            ?>
            </div>
    
            <div class="devices-inputs">
            <form action='./addApp.php' method='post'>
                <input class="devices-inputs-add" type="submit" value="+">
            </form>

            <form action='./RemoveApp.php' method='post'>
                <input class="devices-inputs-delete" type="submit" value="Supprimer">
            </form>
        </div>
    </div>

        <div class="active-device-settings">
            <div class="active-device-img"></div>
            <div class="boutton">
                <button class="clean-button">Clean</button>
                <button class="stop-button">Stop cleaning</button>
            </div>
        </div>
    </div>

    <div class="footer">
        <div>
            <a href="index.php">Accueil</a>
            <a href="mes_appareils.php">Appareils</a>
        </div>

        <div>
            <a href="connection_inscription.php">Login</a>
            <a href="mon_compte.php">Compte</a>
        </div>
    </div>
</body>

</html>