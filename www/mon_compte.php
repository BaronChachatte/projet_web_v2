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
    <title>Mon Compte</title>
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/mon_compte.css">
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
                <a href="mes_appareils.php">Appareils</a>
                <a href="connection_inscription.php">Login</a>
                <a class="active-navbar" href="mon_compte.php">Compte</a>
            </div>
        </div>
    </nav>

    <!-- mise en place container -->
    <div class="container">
        <div class="formulaire">
            <?php
                $sql = "SELECT * FROM admin WHERE user='".$_SESSION['username']."'";
                $result = mysqli_query($link, $sql);

                while($row = mysqli_fetch_array($result)){
                    echo "<p>"."Nom : ".$row['name']."</p>"."</br>";
                    echo "<p>"."Prénom : ".$row['first_name']."</p>"."</br>";
                    echo "<p>"."Mail : ".$row['email']."</p>"."</br>";
                    echo "<p>"."Téléphone : ".$row['phone_number']."</p>"."</br>";
                    echo "<p>"."Adresse : ".$row['adress']."</p>"."</br>";
                }
            ?>
            <div>
                <form action="./deconnexion.php" method="post">
                    <input class="formulaire_logout" type="submit" value="Log out">
                </form>
                <form action="./delete.php">
                    <input class="delete_account" type="submit" value="Supprimer le compte">
                </form>
            </div>
        </div>

        <div class="modifier">
            <a href="./modify_account.php">Modifier vos données personnelles</a>
        </div>
    </div>

    <!-- bar inférieur -->
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