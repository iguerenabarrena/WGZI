<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ikasleak = array(
            "Jone" => array(
                "abizenak" => "Martinez Lopez",
                "adina"=> 20,
                "zikloa" => "AS3"
            ),
            "Ander" => array(
                "abizenak" => "Urrutia Ron",
                "adina"=> 19,
                "zikloa" => "DW3"
            ),
            "Mikel" => array(
                "abizenak" => "Olarreta Andion",
                "adina"=> 20,
                "zikloa" => "DW3"
            )
        );
         echo "<h1>IKASLEAK:</h1> <br>";
        foreach($ikasleak as $izena => $datuak){
            echo "Izena : ". $izena . "<br>";
           foreach($datuak as $gakoa => $balioa){
                echo "-" . $gakoa . ": " . $balioa . "<br>";

           } ;
        }

        
    ?>
</body>
</html>