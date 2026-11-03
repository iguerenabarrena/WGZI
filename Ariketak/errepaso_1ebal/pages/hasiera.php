<?php
    include("../includes/auth.php");
    include("../includes/header.php");
?>
<main>
    <h2>Ongi etorri liburutegira!</h2>
    <p style="text-align:center">Aukera ezazu egin nahi duzuna</p>
    <p style="text-align:center">
        <a class="btn" href="./liburuBerria.php">Liburu berria sortu</a>
        <a class="btn" href="./liburuenKontsulta.php">Liburuen kontsulta</a>
        <a class="btn" href="./bilatzailea.php">Bilatzailea</a>
    </p>
    <h4>Sistema informazioa</h4>
    <ul>
        <li>Liburu berriak gehitu</li>
        <li>Dauden liburuak kontsultatu</li>
        <li>Liburu datuak aldatu</li>
        <li>Liburuak ezabatu</li>
        <li>Bilaketa aurreratua egin</li>
    </ul>
</main>
<?php include("../includes/footer.php"); ?>
