<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Alta formularioa</h1>
    <?php
        $erakutsiFormularioa =true;
        $erakutsiLink = false;

    if (isset($_POST["bidali"]) && isset($_POST["erabiltzaile"]) && isset($_POST["pasahitza"])){
        if( !empty($_POST["erabiltzaile"])  && !empty($_POST["pasahitza"])){
            $erabiltzaile = $_POST["erabiltzaile"];
            $pasahitza = $_POST["pasahitza"];
            echo "<p>Kaixo $erabiltzaile! Ongi etorri!</p>";
            $erakutsiFormularioa =false;
        }else{
            echo "<p>Errorea: Erabiltzaile eta pasahitzaren datuak sartu behar dira</p><br>";
            $erakutsiLink=true;
            $erakutsiFormularioa =false;
        }
        }
        if($erakutsiFormularioa):
    ?>

        
        <form name="formularioa" action="./Arik3.php" method="post">
            <label for="erabiltzaile">Erabiltzaile:</label>
            <input type="text" name="erabiltzaile" id="erabiltzaile"><br>
            <label for="pasahitza">Pasahitza:</label>
            <input type="password" name="pasahitza" id="pasahitza"><br>
            <input type="submit" name="bidali" value="Bidali">
        </form>
    <?php endif; ?>

    <?php if($erakutsiLink): ?>
    <a href="">Itzuli formulariora betetzera</a>
    <?php endif; ?>
</body>
</html>