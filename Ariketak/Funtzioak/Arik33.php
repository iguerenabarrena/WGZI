<?php

    function ikasleaSortu(string $izena, int $adina, array $kalifikazioak){
    global $ikasleak;    
    $ikasleak[$izena] = [
        "adina" => $adina,
        "kalifikazioak" => $kalifikazioak
    ];
        return $ikasleak;
    }

    function ikasleaErakutsi(){
        global $ikasleak;
        foreach($ikasleak as $ikasleIzena => $datuak){
            echo "<li><strong>" . $ikasleIzena . "</strong>: <br> ";
           
                echo "Adina =" . $datuak["adina"] . "<br>" ;
                echo "Notak <br>";
                foreach($datuak["kalifikazioak"] as $modulua => $nota){
                    echo $modulua . "=" .  $nota . "     " ;
                }
                $bb = batazbestekoa($datuak["kalifikazioak"]);
                echo "<br> Batazbestea = " . round($bb, 2) . "<br>" ;
        }
    }

    function batazbestekoa(array $kalifikazioak){
        return array_sum($kalifikazioak) / count($kalifikazioak);
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

   $ikasleak = [
        "Ane" => [
            "adina" => 20,
            "kalifikazioak" => [
                "DWES" => 8.5, "DWEC" => 9.0, "DIW" => 7.5,
                "DAW"  => 8.0, "EIE"  => 9.5, "Ingelesa" => 8.0
            ]
        ],
        "Mikel" => [
            "adina" => 22,
            "kalifikazioak" => [
                "DWES" => 4.2, "DWEC" => 5.0, "DIW" => 3.5,
                "DAW"  => 4.0, "EIE"  => 6.0, "Ingelesa" => 5.0
            ]
        ]
    ];

    $ikasleak = ikasleaSortu("Maite", 23, [
        "DWES" => 7.4, "DWEC" => 8.2, "DIW" => 6.8,
        "DAW"  => 7.0, "EIE"  => 8.5, "Ingelesa" => 7.5
    ]);
    ikasleaErakutsi();
    ?>
</body>
</html>