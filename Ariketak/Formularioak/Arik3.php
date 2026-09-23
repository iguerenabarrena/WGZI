<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alta formularioa</h1>
    <form name="formularioa" action="./Arik3.php" method="post">
        <label for="erabiltzaile">Erabiltzaile:</label>
        <input type="text" name="erabiltzaile" id="erabiltzaile">
        <label for="pasahitza">Pasahitza:</label>
        <input type="password" name="pasahitza" id="pasahitza">
        <input type="submit" value="Bidali">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $erabiltzaile = $_POST["erabiltzaile"];
        $pasahitza = $_POST["pasahitza"];

        if(isset($erabiltzaile) && isset($pasahitza) && !empty($erabiltzaile) && !empty($pasahitza)){
            echo "<p>Kaixo $erabiltzaile! Ongi etorri!</p>";
        }else{
            echo "<p>Errorea: Erabiltzaile eta pasahitzaren datuak sartu behar dira</p>";
        }
    }
    ?>
</body>
</html>