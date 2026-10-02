<?php
    require '../funtzioak.php';
    logeatuta();
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
        <?php
        include './header.php';
        ?>
    </header>
    <main>
        <h1>LIBURU BERRIA SORTU</h1>
        <?php
            if(isset($_POST["gorde"])){
                if(!empty($_POST["izenburua"]) && !empty($_POST["autorea"]) && !empty($_POST["eskuragarri"]) )){
                   liburuBerria(); 
                }
            }
        ?>
        <form action="./liburu_berria.php" id="form_liburu_berria" method="post">
            <label for="izenburua">Izenburua (4-50 karaktere):</label><br>
            <input type="text" name="izenburua" id="izenburua" placeholder="Adb: Don Quijote"><br>
            <label for="autorea">Autorea:</label><br>
            <input type="text" name="autorea" id="autorea"><br>
            <label for="eskuragarri">Eskuragarri dago?</label><br><br>
            <input type="radio" name="eskuragarri" id="bai" value="true">
            <label for="bai">Bai</label>
            <input type="radio" name="eskuragarri" id="ez" value="false">
            <label for="ez">Ez</label>
            <input type="submit" value="Gorde" name="gorde">
            <input type="button"  class="btn-primary" value="Itzuli" name="itzuli">
        </form>
    </main>
    <footer>
        <?php
        include './footer.php';
        ?>
    </footer>
</body>
</html>