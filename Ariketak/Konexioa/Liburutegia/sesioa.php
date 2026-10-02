<?php 
    session_start();
    require './funtzioak.php';
    if(isset($_POST["login"])){
        if(!empty($_POST["erabiltzaile"]) && !empty($_POST["pasahitza"]) ){
            $erabiltzailea =  login($_POST["erabiltzaile"], $_POST["pasahitza"]);
            if($erabiltzailea){
                 header("Location: ./pages/hasiera.php");
                 exit();
              
            }else{
                header("Location: ./pages/logeatu.php");
                exit();
            }
        }else{
             header("Location: ./pages/logeatu.php");
                 exit();
        
        }
    }
?>