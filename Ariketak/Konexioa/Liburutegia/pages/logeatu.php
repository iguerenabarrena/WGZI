<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <?php
        include './header.php';
        ?>
    </header>
    <main>
        <h1>Logeatu</h1>
        <form name="formularioa" action="../sesioa.php" method="post">
            <label for="erabiltzaile">Erabiltzaile</label><br>
            <input type="text" name="erabiltzaile" id="erabiltzaile"><br>
            <label for="pasahitza">Pasahitza</label><br>
            <input type="password" name="pasahitza" id="pasahitza"><br><br>
            <input type="submit" name="login" value="Logeatu">
        </form>

    </main>
    <footer>
        <?php
        include './footer.php';
        ?>
    </footer>
</body>
</html>