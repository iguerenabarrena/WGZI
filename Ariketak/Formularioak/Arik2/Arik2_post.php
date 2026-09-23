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
    $emaila = $_POST["emaila"];

    if(isset($izena) && isset($abizena) && isset($emaila) && !empty($izena) && !empty($abizena) && !empty($emaila)){
        echo "<p>Izena: $izena</p>";
        echo "<p>Abizena: $abizena</p>";
        echo "<p>Emaila: $emaila</p>";
    }

?>
</body>
</html>