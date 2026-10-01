    <?php
    session_start();
    if(isset($_POST['login'])){
        if(empty($_POST['erabiltzaile']) && empty($_POST['pasahitza'])){
            echo "Mesedez hutsuneak bete";
        }else{
        $_SESSION['erabiltzaile'] = $_POST['erabiltzaile'] ;
        $_SESSION['pasahitza'] = $_POST['pasahitza'] ;
        header('Location: ./index.php');
        exit();
        }
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
        <?php
        include './header.php';
        ?>
    </header>
    <main>
     <h1>Log-in</h1>

    <form name="formularioa" action="" method="post">
        <label for="erabiltzaile">Erabiltzaile</label><br>
        <input type="text" name="erabiltzaile" id="erabiltzaile"><br>
        <label for="pasahitza">Pasahitza</label><br>
        <input type="password" name="pasahitza" id="pasahitza"><br><br>
        <input type="submit" name="login" value="Logeatu">
    </form>

    </main>
    <footer>
         <?php
        include './footer.php';
        ?> 
    </footer>

</body>
</html>