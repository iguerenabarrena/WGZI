<?php
    include '../funtzioak.php';
    logeatuta();
?>
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
    <h1>Ongi etorri liburutegira!</h1><br>
    <h4>Aukera ezazu egin nahi duzuna:</h4><br>
    <ul>
        <li><a href="./pages/liburu_berria.php"  class="btn-primary">Liburu berria sortu</a></li>
        <li><a href="./pages/kontsulta.php"  class="btn-primary">Liburuen kontsulta</a></li>
        <li><a  class="btn-primary">Bilatzailea</a></li>
    </ul>
    <footer>
        <?php
        include './footer.php';
        ?>
    </footer>
</body>
</html>