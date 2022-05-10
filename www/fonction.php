<?php
    function check_session(){
        session_start();
        if(!isset($_SESSION["username"])){
            header("location : ./index.php?text=séssion inexistante");
            exit();
        }
    }
?>