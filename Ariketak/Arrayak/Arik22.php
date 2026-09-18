<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutak = array("laranja", "platanoa");

        array_push($frutak, "limoia", "sagarra");

        echo "<h1>Frutak</h1><br>";
        foreach($frutak as $fruta){
            echo $fruta . "<br>" ;
        }
    ?>
</body>
</html>