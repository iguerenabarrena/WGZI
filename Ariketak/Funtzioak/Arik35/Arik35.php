<?php 
 function biderketaTaula(){

     echo "<table>";
    for($i =1; $i<10; $i++){
        $zbk = rand(1,10);
        $emaitza = $zbk * 2;
        echo "
        <tr>
            <td>$i</td>
            <td>$zbk</td>
            <td>$emaitza</td>
        </tr>
        ";
    }
    echo "</table>";
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
    <header>
            <?php include 'header.php' ?>
    </header>
    <?php 
    $zbk;
    do{
        $zbk = rand(0,4);
        switch($zbk){
            case 0:
                echo "Ez du sarbiderik<br>";
                break;
            case 1:
                echo "Ongi etorri, egun on bat pasa!<br>";
                break;
            case 2:
                biderketaTaula();
                break;
            case 3:
            case 4:
                break;
        }   
    }while($zbk==0);
    ?>
    <footer>
         <?php include 'footer.php' ?>
    </footer>
</body>
</html>