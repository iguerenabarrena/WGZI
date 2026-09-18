<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1</title>
    <script src="script.js"></script>
</head>

<body>
    <?php
    $zbk1 = 10;
    $zbk2 = 5;
    $batuketa = $zbk1 + $zbk2;
    $kenketa = $zbk1 - $zbk2;
    $biderketa = $zbk1 * $zbk2;
    $zatiketa = $zbk1 / $zbk2;
    echo"<p> Lehenengo zenbakia = $zbk1 </p>
        <p> Bigarren zenbakia = $zbk2 </p>
        <p> Batuketa = $batuketa </p>
        <p> Kenketa = $kenketa </p>
        <p> Biderketa = $biderketa </p>
         <p> Zatiketa = $zatiketa </p>"
    
    //Incrementoa eta dekrementoak

    ?>

    <?php
        $a = 5;
        $b = ++$a;
        print "a aldagaiaren balioa da $a eta b aldagaiarena $b \n" ;

        $a = 5;
        $b = $a++;
        print "a aldagaiaren balioa da $a eta b aldagaiarena $b \n" ;
    ?>

</body>

</html>