<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bikoitiak = [];
        for($i = 5; $i <= 50; $i++) {
            if($i % 2 == 0){
                $bikoitiak[] = $i;
            }
        }
    echo implode(", ", $bikoitiak);
    ?>
</body>
</html>