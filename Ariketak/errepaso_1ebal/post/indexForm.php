<?php
require_once("../ddbb/connection.php");

function logeatu($erabiltzailea, $pasahitza) {
    try {
        $pdo = connectDB();
        $stmt = $pdo->prepare("SELECT * FROM erabiltzaileak WHERE erabiltzaile_izena = :erabiltzailea AND pasahitza = :pasahitza");
        $stmt->execute(['erabiltzailea' => $erabiltzailea, 'pasahitza' => $pasahitza]);
        return $stmt->fetch();
    } catch (PDOException $e) {
        die("Errorea datu-basearekin konektatzerakoan: " . $e->getMessage());
    }
}

if (isset($_POST["erabiltzailea"], $_POST["pasahitza"])) {
    if (logeatu($_POST["erabiltzailea"], $_POST["pasahitza"])) {
        session_start();
        session_regenerate_id(true);
        $_SESSION["erabiltzailea"] = $_POST["erabiltzailea"];
        header("Location: ../pages/liburuenKontsulta.php"); // PDF-ak dio: logeatu ostean liburuen kontsulta
    } else {
        header("Location: ../index.php?errorea=1");
    }
} else {
    header("Location: ../index.php");
}
exit();
