<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $izen_abizen = "Juan Perez";
    $larriz = strtoupper($izen_abizen);
    $xehez = strtolower($izen_abizen);
    $kop = strlen($izen_abizen) ;
    $lehen = substr($izen_abizen, 0, 1) ;
    $azken = substr($izen_abizen, -1) ;
    $bananduta =explode(" ", $izen_abizen);
    $hirugarrena = substr($izen_abizen, 2, 1) ;
    $bostgarrena = substr($izen_abizen, 4, 1) ;

    
    echo "<p> $izen_abizen </p>
    <p> letra larriz: $larriz </p>
    <p> letra xehez: $xehez </p>
    <p> luzera: $kop </p>
    <p> lehenengo karakterea: $lehen </p>
    <p> azken karakterea: $azken </p>
    <p> Izena: $bananduta[0] </p>
    <p> Abizena: $bananduta[1] </p>
    <p> 3 karakterea: $hirugarrena </p>
    <p> 5. karakterea: $bostgarrena </p>
    "
    ?>
</body>
</html>