<?php
    require_once("./fonction.php");
    require_once("./config.php");
    check_session();
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
    <link rel="stylesheet" href="css/modify_account.css">
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
        <form class="formulaire" action="./modify.php" method="post">
            <?php
                $sql="SELECT * FROM admin WHERE user='".$_SESSION["username"]."'";
                $result=mysqli_query($link, $sql);
                $row = mysqli_fetch_array($result);

                $name = $row["name"];
                $first_name = $row["first_name"];
                $mail = $row["email"];
                $adresse = $row["adress"];
                $phone = $row["phone_number"];

                echo $mail;
                echo $adresse;
                echo "<input type='text' placeholder='modifiez votre prénom' name='new_first_name' value=$first_name>";
                echo "<input type='text' placeholder='modifiez votre nom' name='new_name' value=$name>";
                echo "<input type='text' placeholder='modifiez votre mail' name='new_mail' value=$mail>";
                echo "<input type='text' placeholder='modifiez votre adresse' name='new_adresse' value=$adresse>";
                echo "<input type='text' placeholder='modifiez votre téléphone' name='new_phone' value=$phone>";
                echo '<input class="modify_button" type="submit" value="confirmer les modifications">';
            ?>
        </form>

        <div class="modifier">
            <a href="./modify_account.php">modifier vos données personnelles</a>
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