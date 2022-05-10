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
    <title>Mes Appareils</title>
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/mes_appareils.css">
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

    <div class="devices-container">
        <div class="devices">
            <?php
                $sql="SELECT * FROM admin WHERE user='".$_SESSION["username"]."'";
                $result=mysqli_query($link, $sql);
                $row = mysqli_fetch_array($result);
                $iduser=$row["index_id"];
                $sql="SELECT * FROM appareil WHERE id_user='".$iduser."'";
                $result=mysqli_query($link, $sql);
                while($row =  mysqli_fetch_array($result))
                {
                    $nomappareil=$row["nom_app"];
                    echo("<a>".$nomappareil."</a>");
                }
            ?>
        </div>

        <div class="devices-inputs">
            <button class="devices-inputs-add">+</button>

            <button class="devices-inputs-delete">Supprimer</button>
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