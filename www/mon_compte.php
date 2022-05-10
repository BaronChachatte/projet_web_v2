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
                <a href="mes_appareils.html">Appareils</a>
                <a href="connection_inscription.php">Login</a>
                <a class="active-navbar" href="mon_compte.html">Compte</a>
            </div>
        </div>
    </nav>

    <!-- mise en place container -->
    <div class="container">
        <div class="formulaire">
            <p>Email: 123@gmail.com</p>
            <p>Mot de passe : ******</p>
            <p>Numéro de téléphone : 0677784652</p>
            <p>Nom : leclerc</p>
            <p>Prénom : Patrick</p>
            <p>Adresse : 51 rue nationale</p>
            <p>Langue : Français</p>
            <p>Mode de paiement : Paypal</p>
            <div>
                <form action="./deconnexion.php" method="post">
                    <input class="formulaire_logout" type="submit" value="Log out">
                </form>
                <form action="./delete.php">
                    <input class="delete_account" type="submit" value="supprimer le compte">
                </form>
            </div>
        </div>

        <div class="modifier">
            <a href="#">modifier</a>
            <a href="#">modifier</a>
            <a href="#">modifier</a>
            <a href="#">modifier</a>
            <a href="#">modifier</a>
            <a href="#">modifier</a>
            <a href="#">modifier</a>
            <a href="#">modifier</a>
            <a href="#">l/o</a>
        </div>
    </div>

    <!-- bar inférieur -->
    <div class="footer">
        <div>
            <a href="index.php">Accueil</a>
            <a href="mes_appareils.html">Appareils</a>
        </div>

        <div>
            <a href="connection_inscription.php">Login</a>
            <a href="mon_compte.html">Compte</a>
        </div>
    </div>
</body>

</html>