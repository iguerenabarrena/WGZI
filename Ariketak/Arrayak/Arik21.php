<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $ikasleak = ["Ane", "Jon", "Mikel", "June", "Unai", "Maialen", "Nora"];

        echo "Zenbat ikasle etorri dira?: ". count($ikasleak) . " <br>";
         echo ("<b>Ikasleak</b> <br>");
        foreach($ikasleak as $ikaslea){
            echo ($ikaslea . "<br>");
        }

        if(in_array("Mikel", $ikasleak)){
            echo "Mikel klasera etorri da <br>";
        }else{
            echo "Mikel ez da klasera etorri <br>";
        }

        if(in_array("Nora", $ikasleak)){
            echo "Nora klasera etorri da <br>";
        }else{
            echo "Nora ez da klasera etorri";
        }
    ?>
</body>
</html>