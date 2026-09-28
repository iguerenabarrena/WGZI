<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilatu</title>
</head>
<body>
        <header>
        <?php
        include './header.php';
        ?>
    </header>
    <main>
        <h1>Serieak bilatu</h1>
        <form name="formularioa" action="./bilatu.php" method="post">
        <label for="izenburua">Izenburua:</label>
        <input type="text" name="izenburua" id="izenburua">
        <input type="submit" name="bidali" value="Bidali">
        </form><br>
        <?php
        require 'datuak.php';
        global $series;
         if (isset($_POST["bidali"])){
            $izenburua = $_POST["izenburua"];
            $aurkituta = false;

            if(empty($izenburua)){
                echo "Mesedez bete hutsunea";
            }
            foreach($series as $serie){
                if(trim(strtolower($izenburua)) === trim(strtolower($serie["izenburua"]))){
                    $amaituta = $serie["amaituta"] ? "Amaituta" : "Martxan";
                    echo "<article class='seriea'>
                            <img src='". $serie["irudia"] . "' alt='". $serie["izenburua"]."'>
                            <div>
                                <h2>". $serie["izenburua"] ."</h2>
                                <p>". $serie["generoa"] ."</p>
                                <p>". $serie["denboraldiak"] ." denboraldi</p>
                                <p>Balorazioa: ". $serie["balorazioa"] ."</p>
                                <p>". $amaituta ."</p>
                            </div>
                        </article>";
                        $aurkituta=true;
                }
            }

            if(!$aurkituta){
                echo "Ez da aurkitu seriea";
            }
         }
        ?>

    </main>
    <footer>
         <?php
        include './footer.php';
        ?> 
    </footer>
</body>
</html>