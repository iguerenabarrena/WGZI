<?php 
    require_once 'connection.php';

    $dbName = 'db_liburutegia';
    $pdo = connectDB($dbName); 

    function login(string $erabiltzaile, string $pasahitza){
        global $pdo;
        $stmt = $pdo->prepare("SELECT id, erabiltzaile_izena, pasahitza FROM erabiltzaileak WHERE erabiltzaile_izena = :erabiltzaile , pasahitza = :pasahitza");
        $stmt -> bindParam(':erabiltzaile' , $erabiltzaile);
        $stmt -> bindParam(':pasahitza' , $pasahitza);
        $stmt -> execute();
        $erabiltzailea = $stmt -> fetch();
        return $erabiltzailea;
    }
?>