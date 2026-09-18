<?php
    $adina = 100;
    $mezua = "";
    if($adina>=0 && $adina<18){
        $mezua = "Ondino adingabekoa zara, ezin zara pasatu";
    }else{
        $mezua = "Pasa zaitezke";
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
    <p><?php echo $mezua ;?></p>
</body>
</html>