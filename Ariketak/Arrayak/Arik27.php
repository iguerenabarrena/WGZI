<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $desio_zerrenda = ["Estatu batuak", "Italia", "Austria", "Portugal", "Marruekos", "Errusia"];

        array_push($desio_zerrenda, "Norvegia", "Afganistan");

        $bisitatuak_2022 = array("Italia", "Frantzia");
        $bisitatuak_2023 = array("Portugal", "Japon");

        $bisitatuak_guztiak = array_merge($bisitatuak_2022, $bisitatuak_2023);

        $desio_zerrenda = array_diff($desio_zerrenda, $bisitatuak_guztiak);

        sort($desio_zerrenda);

        print_r($desio_zerrenda);

    ?>
</body>
</html>