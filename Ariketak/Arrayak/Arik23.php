<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $filmak = array("Titanic", "Tesis", "Interstellar", "Pulp Fiction", "El Padrino", "Matrix", "El Señor de los Anillos", "Origen", "La lista de Schindler", "Gladiator", "Parásitos", "Cadena perpetua", "Psicosis", "El club de la lucha", "Forrest Gump");    
        
        sort($filmak);

        print_r($filmak);
    ?>
</body>
</html>