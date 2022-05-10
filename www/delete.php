<?php
    require_once("./fonction.php");
    check_session();
    require_once("./config.php");

    if(isset($_SESSION['username'])){
        $sql = "DELETE FROM admin WHERE user='".$_SESSION['username']."'";
        mysqli_query($link, $sql);
        session_destroy();
        header("location: index.php?text=l'utilisateur a bien été supprimé");
        exit();
    }
    mysqli_close($link);
?>