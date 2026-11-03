<?php
// $root: orrialdearen kokapenaren arabera ("./" index.php-n, "../" pages/-en)
$root = $root ?? '../';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liburutegia</title>
    <link rel="stylesheet" href="<?php echo $root; ?>assets/style.css">
</head>
<body>
    <header>
        <h1>📚 LIBURUTEGIA</h1>
        <h5>Liburu kudeaketa sistema</h5>
        <?php if (isset($_SESSION['erabiltzailea'])): ?>
        <nav>
            <a href="<?php echo $root; ?>pages/hasiera.php">Hasiera</a>
            <a href="<?php echo $root; ?>pages/liburuBerria.php">Liburu berria</a>
            <a href="<?php echo $root; ?>pages/liburuenKontsulta.php">Liburuen kontsulta</a>
            <a href="<?php echo $root; ?>pages/bilatzailea.php">Bilatzailea</a>
            <a href="<?php echo $root; ?>post/logout.php">Irten</a>
        </nav>
        <?php endif; ?>
    </header>
