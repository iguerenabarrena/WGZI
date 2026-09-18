<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $zenbakiak = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $gehiketa = 0;
        foreach($zenbakiak as $zenbakia){
            $gehiketa += $zenbakia;
        }
        echo implode("+", $zenbakiak) . " = " . $gehiketa;
    ?>
</body>
</html>