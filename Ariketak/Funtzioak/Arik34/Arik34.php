<?php 
    $aukerak = [ 0 => "Harri", 1 => "Orri", 2 => "Artazi" ];

    function irabazleaAukeratu($jokalaria, $makina){
       global $aukerak;
       global $jokalariIrabazi;
       global $makinaIrabazi;
        $jokalariAukera=$aukerak[$jokalaria];
        $makinaAukera=$aukerak[$makina];
        
        echo "Jokalariak ". $jokalariAukera . "- Makinak " . $makinaAukera . "-";
        if($jokalariAukera==$makinaAukera){
            echo "Empatea egon da <br>";
            
        }else if($jokalariAukera == "Harri" && $makinaAukera == "Orri"){
            echo "Ordenagailu irabazi du!  <br>";
            $makinaIrabazi++;
            if($makinaIrabazi==3){
                echo "<strong>Makina irabazi du!<br></strong>";
            }
        }else{
            echo "Irabazi duzu!  <br>";
            $jokalariIrabazi++;
            if($jokalariIrabazi==3){
                echo "<strong>Irabazi duzu!<br></strong>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jolasa: Harri, Orri, Artazi</title>
</head>
<body>

    <header>
        <?php
        include './header.php';
        ?>
    </header>

    <main>
        <?php 
            $jokalaria = 0;
            $jokalariIrabazi = 0;
            $makina = 0;
            $makinaIrabazi = 0;
            global $aukerak;
            echo "Jolasa hasiko da ... <br>";
            while($jokalariIrabazi <3 && $makinaIrabazi <3){
                $jokalaria = rand(0,2);
                $makina = rand(0, 2);
                 irabazleaAukeratu($jokalaria, $makina);
            }
        ?>
        
    </main>

    <footer>
        <?php 
        include './footer.php';
        ?>
    </footer>
</body>
</html>