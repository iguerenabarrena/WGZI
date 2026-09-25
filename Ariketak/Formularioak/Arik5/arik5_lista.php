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
                
                $koloreak = $_POST["kolorea"];
                echo "<ul>";
                        foreach($koloreak as $kolorea){
                            echo "<li>$kolorea</li>";
                        }
                echo"</ul>";

            }else{
                 echo "<h1>Ez da kolorea jaso</h1><br>
                        <a href='./arik5.php'>Beste kolore bat aukeratu</a>";
            }

        }
    ?>
</body>
</html>