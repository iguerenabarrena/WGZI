<?php 
    $aldagaia = 2;
    $mezua ="";

    switch($aldagaia){
        case 1: 
            $mezua = "$aldagaia berdin 1";
            break;
        case 2: 
            $mezua = "$aldagaia berdin 2";
            break;
        case 3: 
            $mezua = "$aldagaia berdin 3";
            break;
        default: 
            $mezua = "$aldagaia ez da ez 1, ez 2 ezta 3.";
            break;
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