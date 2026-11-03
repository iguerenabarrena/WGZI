<?php
    $root = './';
    include("includes/header.php");
?>
<main>
    <h3>Logeatu</h3>
    <?php if (isset($_GET['errorea'])): ?>
        <p class="error">Erabiltzailea edo pasahitza okerra da.</p>
    <?php endif; ?>
    <form action="post/indexForm.php" method="post" id="logeatu">
        <label for="erabiltzailea">Erabiltzailea:</label>
        <input type="text" id="erabiltzailea" name="erabiltzailea" required>
        <label for="pasahitza">Pasahitza:</label>
        <input type="password" id="pasahitza" name="pasahitza" required>
        <input type="submit" value="Logeatu" name="logeatu">
    </form>
</main>
<?php include("includes/footer.php"); ?>
