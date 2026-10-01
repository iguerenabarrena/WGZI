<?php
    session_start();

    if(!isset($_SESSION["erabiltzaile"])){
            header("Location: ./logeatu.php");
            exit();
    }else{

    }
?>
