<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection/Inscription</title>
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/connection_inscription.css">
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
                <a class="active-navbar" href="connection_inscription.php">Login</a>
                <a href="mon_compte.html">Compte</a>
            </div>
        </div>
    </nav>

    <div class="block_full">
        <div class="block_login">
            <p class="title_register">Connexion</p>

            <?php if(!isset($_SESSION["username"])) : ?>
                <form action='./connexion.php' method='post'>
                    <div>
                        <label>Login : </label>
                        <input class="user_login" type='text' name='login'>
        
                    </div>

                    <div>
                        <label>Mot de passe : </label>
                        <input class="pswd_login" type='password' name='password'>
                    </div>

                    <?php
                        if (isset($_GET["text"]) && !empty($_GET["text"])) {
                            echo "<h2>".$_GET["text"]."</h2>";
                        }
                    ?>
                    
                    <input class="btn_login" type='submit' value='Connexion'>
                </form>

            <?php elseif(isset($_SESSION["username"])) : ?>
                <form action='./deconnexion.php' method='post'>
                    <?php
                        echo "<h2>".$_SESSION["username"]."</h2>";
                    ?>

                    <input class="btn_login" type="submit" value="Log out">
                </form>

            <?php endif; ?>
        </div>

        <div class="block_register">
            <p class="title_register">Inscription</p>

            <form action="inscription.php" method="post">
                <div class="input_block_register">
                    <div class="input_register">
                        <label>Login :</label>
                        <input type="text" name="user">
                    </div>

                    <div>
                        <label>Mot de passe :</label>
                        <input type="password" name="password">
                    </div>
                </div>

                <div class="input_block_register">
                    <div class="input_register">
                        <label>Prénom :</label>
                        <input type="text" name="first_name">
                    </div>

                    <div>
                        <label>Nom :</label>
                        <input type="text" name="name">
                    </div>
                </div>

                <div class="input_block_register">
                    <div class="input_register">
                        <label>Adresse :</label>
                        <input type="text" name="adress">
                    </div>

                    <div>
                        <label>Numéro de téléphone :</label>
                        <input type="text" name="phone_number">
                    </div>
                </div>

                <div>
                    <label>Email :</label>
                    <input type="text" name="email">
                </div>

                <input class="btn_register" type="submit" value="Inscription">
            </form>
        </div>
    </div>
    
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
