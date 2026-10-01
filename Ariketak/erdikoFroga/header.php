<?
    session_start();
?>
<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tx_Series</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <div class="goiburua">
            <img src="img/logo.png" alt="Tx_Series logoa">

            <nav>
                <a href="./index.php">Hasiera</a>
                <a href="./bilatu.php">Bilatu</a>
                <?php 
                if(isset($_SESSION['erabiltzaile'])): ?>
                    <a href="./gehitu.php">Seriea gehitu</a>
                    <a href="./estatistikak.php">Estatistikak</a>
                    <a href="./logout.php">Log out</a>
                <?php else : ?>
                    <a href="./login.php">Log in</a>
                <?php endif; ?>

                
            </nav>
                
        </div>
    </header>


</body>
</html>
