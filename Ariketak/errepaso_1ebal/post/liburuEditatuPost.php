<?php
include("../includes/auth.php");
require_once("../ddbb/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['kodea'], $_POST['titulua'], $_POST['autorea'], $_POST['eskuragarri'])) {
    try {
        $pdo = connectDB();
        $stmt = $pdo->prepare("UPDATE liburuak SET titulua = :titulua, autorea = :autorea, eskuragarri = :eskuragarri WHERE kodea = :kodea");
        $stmt->execute([
            ':titulua'     => trim($_POST['titulua']),
            ':autorea'     => trim($_POST['autorea']),
            ':eskuragarri' => (int)$_POST['eskuragarri'],
            ':kodea'       => (int)$_POST['kodea']
        ]);
    } catch (PDOException $e) {
        die("Errorea aldatzerakoan: " . $e->getMessage());
    }
}
header("Location: ../pages/liburuenKontsulta.php");
exit();
