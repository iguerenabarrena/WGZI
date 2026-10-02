<?php
    session_start();

    if(!isset($_SESSION["erabiltzaile"])){
            header("Location: ./pages/logeatu.php");
            exit();
    }else{
        header("Location: ./pages/hasiera.php ");
        exit();
    }
?>
