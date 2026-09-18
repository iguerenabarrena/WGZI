<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $zenbakia = 5;
    for($i = 1; $i <= 10 ; $i++){
        $biderketa = $zenbakia * $i;
        echo "$zenbakia x $i = $biderketa <br>";
    } 
    ?>
</body>
</html>