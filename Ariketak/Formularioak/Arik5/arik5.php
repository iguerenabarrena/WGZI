<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!DOCTYPE html>
<html>
<body>
<h1>IKASLEEN DATUAK</h1>
     <form id="formularioa" action="./arik5_post.php" method="post" >
        <label for="fname">Izena:</label>
        <input type="text" id="fname" name="fname" ><br><br>
        <label for="lname">Abizena:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <p>Adina</p>
        <input type="radio" id="age1" name="age" value="15">
        <label for="age1">0 - 15</label><br>
        <input type="radio" id="age2" name="age" value="60">
        <label for="age2">15 - 60</label><br>  
        <input type="radio" id="age3" name="age" value="100">
        <label for="age3">60 - 100</label><br><br>
        <p>Zelan zatoz ikastetxera?</p>
        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
        <label for="vehicle1"> Bizikletaz</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
        <label for="vehicle2"> Kotxez</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Bus">
        <label for="vehicle3"> Autobusez</label><br><br>
        <label for="alta_data">Alta data:</label>
        <input type="date" id="alta_data" name="alta_data"><br><br>
        <input type="submit" name="bidali" value="Bidali">
    </form>
</body>
</html>

</body>
</html>