<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
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
                <a class="active-navbar" href="index.php">Accueil</a>
                <a href="mes_appareils.php">Appareils</a>
                <a href="connection_inscription.php">Login</a>
                <a href="mon_compte.php">Compte</a>
            </div>
        </div>
    </nav>

    <div class="products-all">
        <div class="products-top">
            <div class="product">
                <img src="images\index\appareil1.jpeg" alt="appareil1">
            </div>

            <div class="product sec-product">
                <img src="images\index\appareil2.jpg" alt="appareil2">
            </div>

            <div class="product">
                <img src="images\index\appareil3.jfif" alt="appareil3">
            </div>
        </div>

        <div class="products-bottom">
            <div class="product">
                <img src="images\index\appareil4.jpg" alt="appareil4">               
            </div>

            <div class="product">
                <img src="images\index\appareil5.jpg.crdownload" alt="appareil5">
            </div>

            <div class="product">
                <img src="images\index\appareil6.jpg.crdownload" alt="appareil6">
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
