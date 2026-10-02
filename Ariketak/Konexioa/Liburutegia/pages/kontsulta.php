<?php
    include './Konexioa/Liburutegia/funtzioak.php';
    $count = 0;
    function printeatuLiburuak(){
         $liburuak = liburuak() ;
         global $count;
        $count = count($liburuak);
        if (!empty($liburuak)) {
            echo "<p class='total-count'>Guztira: <strong>$count</strong> liburu</p>";
        echo "<table class='tabla-liburuak'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Titulua</th>";
        echo "<th>Egilea</th>";
        echo "<th>Egoera</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach($liburuak as $liburua){
            $count++;
            echo "<tr>";
            echo "<td>" . htmlspecialchars($liburua['kodea']) . "</td>";
            echo "<td>" . htmlspecialchars($liburua['titulua']) . "</td>";
            echo "<td>" . htmlspecialchars($liburua['autorea']) . "</td>";
            echo "<td>" . htmlspecialchars($liburua['egoera'] ?? 'Bai' ?: 'Ez') . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>Ez dago libururik erregistratuta.</p>";
    }
    }
    
    logeatuta();
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
        include './header.php';
        ?>
    </header>
   <main>
        <h1>Liburuen kontsulta</h1>
        <a href="./liburu_berria.php" class="btn-primary">Liburu berria sortu</a>
        <?php printeatuLiburuak(); ?>
    </main>
    <footer>
        <?php
        include './footer.php';
        ?>
    </footer>
</body>
</html>