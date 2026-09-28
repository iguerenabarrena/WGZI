
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tx_Series</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <header>
        <?php
        include './header.php';
        ?>
    </header>
    <main>

        <h1>Tx_Series</h1>
        <?php
         require 'datuak.php' ;
         erakutsiSerieak();
        ?>
    </main>
    <footer>
         <?php
        include './footer.php';
        ?> 
    </footer>
    
</body>
</html>