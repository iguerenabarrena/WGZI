<?php 
    function gehitu(int $zbk){
        $zbk++;
        return $zbk;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $zbk = 5;

        echo "Hasierako zenbakia $zbk da <br>";

        $zbk = gehitu($zbk);

        echo "Zenbakia aldatuta $zbk da"
    ?>
</body>
</html>