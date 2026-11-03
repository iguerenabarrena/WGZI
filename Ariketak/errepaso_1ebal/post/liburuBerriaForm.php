<?php
include("../includes/auth.php");
require_once("../ddbb/connection.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../pages/liburuBerria.php");
    exit();
}

try {
    $pdo = connectDB();
    $stmt = $pdo->prepare("INSERT INTO liburuak (titulua, autorea, eskuragarri) VALUES (:titulua, :autorea, :eskuragarri)");
    $stmt->execute([
        'titulua'     => trim($_POST["izenburua"]),
        'autorea'     => trim($_POST["autorea"]),
        'eskuragarri' => (int)$_POST["eskuragarri"]
    ]);
    header("Location: ../pages/liburuenKontsulta.php");
    exit();
} catch (PDOException $e) {
    die("Errorea liburua gordetzerakoan: " . $e->getMessage());
}
