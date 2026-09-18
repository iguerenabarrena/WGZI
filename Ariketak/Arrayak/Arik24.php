<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $paises = array ("alemania","brasil","italia","txil","uruguay","australia");
    
        //in_array(("alemania", "italia", "australia") , $paises);
        //unset($paises[0], $paises[2], $paises[5]);

        $bilatu = array("alemania", "italia", "austria");
       
        $paises = array_diff($paises, $bilatu);
        

        array_unshift($paises, "argentina", "bolivia");

        sort($paises);

        print_r($paises);
    ?>
</body>
</html>