<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
                $notak = array("Ander"=>"3.5", "Bego"=>"7", "Jon"=>"6.3");
                $batura =0;
                
                echo "<h1>Ikasleak</h1>";
                foreach($notak as $izena => $nota){
                    echo $izena . ": " . $nota . "<br>";
                    $batura += $nota;    
                }
                $avg = $batura/ count($notak);
                echo "Batazbestekoa: " . $avg ; 
    ?>
</body>
</html>