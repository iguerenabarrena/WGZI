<?php
include("../includes/auth.php");
require_once("../ddbb/connection.php");

// Ezabaketa POST bidez bakarrik (baieztapen orritik)
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['kodea']) && ctype_digit($_POST['kodea'])) {
    try {
        $pdo = connectDB();
        $stmt = $pdo->prepare("DELETE FROM liburuak WHERE kodea = :id");
        $stmt->bindValue(':id', (int)$_POST['kodea'], PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        die("Errorea ezabatzerakoan: " . $e->getMessage());
    }
}
header("Location: ../pages/liburuenKontsulta.php");
exit();
