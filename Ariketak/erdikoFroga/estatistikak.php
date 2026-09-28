<?php 
    require 'datuak.php';
    global $series;
    $kop =0;
    $martxan =0;
    $bb = 0;
    $altuena = 0;
    foreach($series as $serie){
        $kop++;
        if($serie["amaituta"]  == true){
            $martxan++;
        }

        $gehiketa += $serie["balorazioa"];
        $bb = $gehiketa/ $kop;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
        include './header.php';
        ?>
    </header>
    <main>
    <?php
        echo "Serie kopurua $kop <br>
              Martxan dauden serieak $martxan <br>
              Batezbesteko balorazioa $bb <br>"
    ?>
    </main>
    <footer>
         <?php
        include './footer.php';
        ?> 
    </footer>
</body>
</html>