<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gehitu</title>
</head>
<body>
        <header>
        <?php
        include './header.php';
        ?>
    </header>
    <main>
         <form name="formularioa" action="./gehitu.php" method="post">
            <label for="izenburua">Izenburua:</label>
            <input type="text" name="izenburua" id="izenburua">
            <label for=generoa>Generoa:</label>
            <select name="generoa" id="generoa">
                <option value="Zientzia Fikzioa">Zientzia Fikzioa</option>
                <option value="Drama">Drama</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Thriller">Thriller</option>
            </select>
             <label for="denboraldiak">Denboraldi kopurua:</label>
            <input type="number" name="denboraldiak" id="denboraldiak">
             <label for="balorazioa">Balorazioa:</label>
            <input type="number" name="balorazioa" id="balorazioa">
            <label for=egoera>Egoera:</label>
            <select name="egoera" id="egoera">
                <option value="false">Martxan</option>
                <option value="true">Amaituta</option>
            </select>
            <input type="submit" name="bidali" value="Seriea gehitu">
        </form>
        <?php 
         require 'datuak.php' ;
        if(isset($_POST["bidali"])){
            if(!empty($_POST["izenburua"]) && !empty($_POST["denboraldiak"]) && !empty($_POST["balorazioa"])){
                $izenburua = $_POST["izenburua"];
                $generoa = $_POST["generoa"];
                $denboraldiak = $_POST["denboraldiak"];
                $balorazioa = $_POST["balorazioa"];
                $amaituta = is_bool($_POST["egoera"]);
                serieaGehitu($izenburua, $generoa, $denboraldiak, $balorazioa, $amaituta);
            }else{
                echo "<p>Mesedez bete hutsune guztiak</p>";
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