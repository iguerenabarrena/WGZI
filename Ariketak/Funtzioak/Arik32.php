<?php

    function ikasleaSortu(array $ikasleak, string $izena, int $adina, float $kalifikazioa){
        $ikasleak[$izena] = [
        "adina" => $adina,
        "kalifikazioa" => $kalifikazioa
    ];
        return $ikasleak;
    }

    function ikasleaErakutsi(array $ikasleak){
        foreach($ikasleak as $ikasleIzena => $datuak){
            echo "<li><strong>" . $ikasleIzena . "</strong>: <br> ";
            foreach($datuak as $gakoa => $balioa){
                echo $gakoa . "=" . $balioa . "<br>";
            }
        }
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
        "kalifikazioa" => 8.5
    ],
    "Mikel" => [
        "adina" => 22,
        "kalifikazioa" => 4.2
    ],
    "Jon" => [
        "adina" => 19,
        "kalifikazioa" => 6.0
    ],
    "Uxue" => [
        "adina" => 21,
        "kalifikazioa" => 9.8
    ],
    "Eneko" => [
        "adina" => 20,
        "kalifikazioa" => 3.5
    ]
];

    $ikasleak = ikasleaSortu($ikasleak, "Maite", 23, 7.4);
    ikasleaErakutsi($ikasleak);
    ?>
</body>
</html>