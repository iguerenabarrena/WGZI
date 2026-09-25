<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">

    <input
        type="file"
        name="fitxategia"
        accept=".jpg,.jpeg,.png,.gif,.pdf"
        required
    >

    <input type="submit" value="Igo fitxategia">

    <?php
        if(!isset($_FILES['fitxategia']) ||$_FILES['fitxategia']['error'] !== UPLOAD_ERR_OK) {
            die("Errorea: fitxategia ez da behar bezala igo.");
        } 
        $fitxategia = $_FILES["fitxategia"];
        foreach($_FILES["fitxategia"] as $gakoa => $balioa){
            echo "<br>Propietatea: $gakoa ----- Balorea : $balioa <br>";
        }
    ?>
</form>
</body>
</html>