<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formularioa" action="./arik5_lista.php" method="post">
        <p>Aukerat bat baino gehiago</p>
        <input type="checkbox" id="gorria" name="kolorea[]" value="gorria">
        <label for="gorria">Gorria</label><br>
        <input type="checkbox" id="berdea" name="kolorea[]" value="berdea">
        <label for="berdea">Berdea</label><br>
        <input type="checkbox" id="urdina" name="kolorea[]" value="burdina">
        <label for="urdina">Urdina</label><br>
        <input type="checkbox" id="horia" name="kolorea[]" value="horia">
        <label for="horia">Horia</label><br>
        <input type="checkbox" id="morea" name="kolorea[]" value="morea">
        <label for="morea">Morea</label><br>

        <input type="submit" name="bidali" value="Bidali">
    </form>
</body>
</html>