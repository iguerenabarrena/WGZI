<?php 

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
         echo "<table>";
    for($i =1; $i<=4; $i++){
        $zbk = rand(1,10);
        $emaitza = $zbk * $i;
        echo "
        <tr>
            <td>$i</td>
            <td>$zbk</td>
            <td>$emaitza</td>
        </tr>
        ";
    }
    echo "</table>";
    ?>    
</body>
</html>