<?php 
    $zenbakia= 100;
    $mezua = "";
    if($zenbakia>=0 && $zenbakia<=10){
        $mezua = "Zenbakia $zenbakia da";
    }else{
        $mezua = "Zenbakia ez dago 0 eta 10en artean";
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