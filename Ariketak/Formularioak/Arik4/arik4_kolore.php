<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_POST["bidali"])){

            if(!empty($_POST["kolorea"])){

                $kolorea = $_POST["kolorea"];
                echo "<style> h1{background-color:$kolorea;}</style><h1>Aukeratutako kolorea $kolorea izan da</h1> <br>
                    <a href='./arik4.php'>Beste kolore bat aukeratu</a>" ; 

            }else{

                echo "<h1>Ez da kolorea jaso</h1><br>
                        <a href='./arik4.php'>Beste kolore bat aukeratu</a>";
            }
        }
    ?>
</body>
</html>