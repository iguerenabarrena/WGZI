<?php 
    function avg(int $a , int $b){
        $emaitza = $a * $b / 2;
        return $emaitza;
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
        $a = 10;
        $b = 70;        

        echo $a . " eta " . $b . "ren batazbestea: " . avg($a, $b); 
    ?>
</body>
</html>