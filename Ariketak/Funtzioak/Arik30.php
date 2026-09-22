<?php 
    function kalkulatu(int $prezioa, float $BEZ = 0.21){
        $guztira = $prezioa + ($prezioa * $BEZ);
        return $guztira;
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
    $prezioa = 23;
    $bez = 0.21;

    $emaitza = kalkulatu($prezioa);

    echo "Prezioa: " . $prezioa . 
    "<br> BEZ-a: %" . (100 * $bez) .
    "<br> Amaierako prezioa: " . $emaitza; 
?>    
</body>
</html>