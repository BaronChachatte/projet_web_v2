<?php
    require_once("./fonction.php");
    check_session();
    require_once("./config.php");

    $sql="SELECT * FROM admin WHERE user='".$_SESSION["username"]."'";
    $result=mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    $iduser=$row["index_id"];

    if((!isset($_POST["new_name"])) || (empty($_POST["new_name"])) || (!isset($_POST["new_first_name"])) || (empty($_POST["new_first_name"])) || (!isset($_POST["new_mail"])) || (empty($_POST["new_mail"])) || (!isset($_POST["new_adresse"])) || (empty($_POST["new_adresse"])) || (!isset($_POST["new_phone"])) || (empty($_POST["new_phone"])) ){

        header("location: ./modify_account.php?text=tous les camps ne sont pas remplis");
        exit();
    }
    else{
        $sql = "UPDATE admin SET name='".$_POST["new_name"]."', first_name='".$_POST["new_first_name"]."', adress='".$_POST["new_mail"]."', phone_number='".$_POST["new_adresse"]."', email='".$_POST["new_phone"]."' WHERE index_id='".$iduser."'";
        $result=mysqli_query($link, $sql);
        header("location: ./mon_compte.php?text=les modification ont bien été effectués");
        exit();
    }
    mysqli_close($link);
?>