<?php
// Saioa hasita ez badago, login orrira bidali
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['erabiltzailea'])) {
    header("Location: ../index.php");
    exit();
}
