<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
    <?php
    
    echo "<tr>";
    echo "<th></th>";
    for($i = 1; $i<=4; $i++){
        echo "<th>$i</th>";  
    }
    echo "</tr>";
     for($i = 1; $i<=4; $i++){
            echo "<tr>";
            echo "<th>$i</th>";
            for($j = 1; $j<=4; $j++){
                echo "<td>$i-$j</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>