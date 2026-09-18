<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1</title>
    <script src="script.js"></script>
</head>

<body>
    <?php
    const UNIBERTSITATEA = "Euskal Herriko unibertsitatea";
    const GRADU_KREDITUAK = 240;
    define("IKASTAROA_PREZIOAK", 1250.75);
    $ikasle_izena = "Irune";
    $orain_arte_kreditoak = 45;
    $batez_besteko_nota = 7.8;
    $ikastaro_bukatua = false;


    echo "<p>Ikastlearen izena : $ikasle_izena</p>
    <p>Unibertsitatea : " . UNIBERTSITATEA . "</p>
    <p>Batez besteko nota(kalkulatua): $batez_besteko_nota</p>
    <p>Falta diren kreditoak : " . GRADU_KREDITUAK . "</p>
    <p>Ikastaroa bukatuta : " . $ikastaro_bukatua ? "Bai" : "Ez" . "</p>
    <p>Ordaindu beharreko prezioa : " . IKASTAROA_PREZIOAK . "</p>
    ";

    ?>

</body>

</html>