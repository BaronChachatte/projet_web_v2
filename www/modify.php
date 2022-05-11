<?php
    require_once("./fonction.php");
    check_session();
    require_once("./config.php");

    $sql="SELECT * FROM admin WHERE user='".$_SESSION["username"]."'";
    $result=mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    $iduser=$row["index_id"];

    if((!isset($_POST["password"])) || (empty($_POST["password"])) || (!isset($_POST["new_name"])) || (empty($_POST["new_name"])) || (!isset($_POST["new_first_name"])) || (empty($_POST["new_first_name"])) || (!isset($_POST["new_mail"])) || (empty($_POST["new_mail"])) || (!isset($_POST["new_adresse"])) || (empty($_POST["new_adresse"])) || (!isset($_POST["new_phone"])) || (empty($_POST["new_phone"]))){

        header("location: ./modify_account.php?text=tous les champs ne sont pas remplis");
        exit();
    }
    else{
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "UPDATE admin SET password='".$hash."', first_name='".$_POST["new_first_name"]."', name='".$_POST["new_name"]."', adress='".$_POST["new_adresse"]."', phone_number='".$_POST["new_phone"]."', email='".$_POST["new_mail"]."' WHERE index_id='".$iduser."'";
        $result=mysqli_query($link, $sql);
        header("location: ./mon_compte.php?text=les modification ont bien été effectués");
        exit();
    }
    mysqli_close($link);
?>