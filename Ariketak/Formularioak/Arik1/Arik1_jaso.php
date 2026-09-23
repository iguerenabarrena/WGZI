<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $izena = $_POST["izena"];
    $abizena = $_POST["abizena"];

    if(isset($izena) && isset($abizena) && !empty($izena) && !empty($abizena)){
        echo "<p>Ongi etorri!</p>";
    }

?>
</body>
</html>