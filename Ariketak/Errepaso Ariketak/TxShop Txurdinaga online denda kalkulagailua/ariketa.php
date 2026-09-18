<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1</title>
</head>

<body>
    <?php
    const DENDA_IZENA = "TxShop Txurdinaga";
    const BEZ_EHUNEKOA = 21;
    define("GARRAIO_PREZIOA", 5.99);
    define("DOAN_GARRAIO_MUGA", 50);
    $produktu1_izena = "Ordenagailu sagua";
    $produktu1_prezioa = 25.5;
    $produktu1_kantitatea = 2;
    $produktu2_izena = "Teklatua";
    $produktu2_prezioa = 45.0;
    $produktu2_kantitatea = 1;
    $produktu3_izena = "Pantaila kablea";
    $produktu3_prezioa = 15.75;
    $produktu3_kantitatea= 3;

    $guztizko_prezioa1 = $produktu1_prezioa * $produktu1_kantitatea;
    $guztizko_prezioa2 = $produktu2_prezioa * $produktu2_kantitatea;
    $guztizko_prezioa3 = $produktu3_prezioa * $produktu3_kantitatea;

    $azpitotala = $produktu1_prezioa + $produktu2_prezioa + $produktu3_prezioa;
    $bez_kantitatea = $azpitotala * BEZ_EHUNEKOA /100;
    echo"<p>Guztizko prezioa ( $guztizko_prezioa1, $guztizko_prezioa2, $guztizko_prezioa3) </p>
    <p>Azpitotala: $azpitotala </p>";

    
    ";

    ?>

</body>

</html>