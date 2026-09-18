<?php 
    $izena = "Garazi";
    $abizen1 = "Olabarria";
    $abizen2 = "Iriondo";

    $mezua = "";

    if($izena == "Garazi" || ($abizen1 == "Olabarria" || $abizen2 == "Iriondo" )){
        $mezua = "Ongi etorri $izena $abizen1 $abizen2";
    }else{
        $mezua = "Ez du sarbiderik";
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
    <p><?php echo $mezua; ?></p>
</body>
</html>