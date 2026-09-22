<?php
    function gehitu(){
        static $zbk = 0;
        return ++$zbk;

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
        echo "<p>1. deia: " . gehitu() . "</p>"; 
        echo "<p>2. deia: " . gehitu() . "</p>"; 
        echo "<p>3. deia: " . gehitu() . "</p>"; 
    ?>    
</body>
</html>