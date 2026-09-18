<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenbakia Asmatu</title>
</head>
<body>
    <?php
        $zbk = 4;
        $aukerak = [];

        for ($i = 1; $i <= 5; $i++) {
            $zbkAsmatuta = rand(1, 10);
            
            $errepikatua = false;
            for ($j = 0; $j < count($aukerak); $j++) {
                if ($aukerak[$j] == $zbkAsmatuta) {
                    $errepikatua = true;
                    break;
                }
            }

            if ($errepikatua) {
                echo "Saiakera $i: $zbkAsmatuta zenbakia errepikatu duzu!<br><br>";
            } else {
                array_unshift($aukerak, $zbkAsmatuta);

                echo "Saiakera $i: <br>";
                if ($zbk == $zbkAsmatuta) {
                    echo "Aukeratutako zenbakia $zbkAsmatuta da. <br>
                          <strong>Zuzena, asmatu duzu!</strong><br><br>";
                    break;
                } else {
                    echo "Aukeratutako zenbakia $zbkAsmatuta da. <br>
                          Saiakera okerra, berriro saiatzen...<br><br>";

                    if ($i == 5) {
                        echo "<strong>Saiakerak bukatu dira.</strong><br><br>";
                    }
                }
            }
        }
    ?>
</body>
</html>