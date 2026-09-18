<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arik16</title>
</head>
<body>
    <?php
        $zbk = 4;
        for($i = 1; $i <= 5; $i++){
            $zbkAsmatuta = rand(1, 10);
            echo "Saiakera $i: <br>";
            if($zbk == $zbkAsmatuta){
               echo "Aukeratutako zenbakia $zbkAsmatuta da. <br>
                    Zuzena asmatu duzu!<br>";
                    break;
            }else{
                echo "Aukeratutako zenbakia $zbkAsmatuta da. <br>
                    Saiakera okerra, berriro saiatzen...<br>";
                if($i == 5){
                    echo "Saiakerak bukatu dira. <br>";
                }
            }
        }
    ?>
</body>
</html>