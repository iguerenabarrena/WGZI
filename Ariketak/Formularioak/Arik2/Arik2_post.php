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
    if(!isset($izena) || empty($izena)){
        echo"<p>Izena falta da</p>";
    }
    if(!isset($abizena) || empty($abizena)){
        echo"<p>Abizena falta da</p>";
    }
    if(!isset($emaila) || empty($emaila)){
        echo"<p>Emaila falta da</p>";
    }

?>
</body>
</html>