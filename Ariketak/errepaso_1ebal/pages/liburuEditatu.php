<?php
    include("../includes/auth.php");
    require_once("../post/liburuKontsultaFunctions.php");

    // GET bidez kodea iritsi dela egiaztatu
    if (!isset($_GET['kodea']) || !ctype_digit($_GET['kodea'])) {
        header("Location: liburuenKontsulta.php");
        exit();
    }
    $liburua = hartuLiburua($_GET['kodea']);
    if (!$liburua) {
        header("Location: liburuenKontsulta.php");
        exit();
    }
    include("../includes/header.php");
?>
<main>
    <h2>✏️ Liburuak aldatu</h2>
    <form action="../post/liburuEditatuPost.php" method="post">
        <p><strong>Liburu kodea: <?php echo (int)$liburua['kodea']; ?></strong></p>
        <input type="hidden" name="kodea" value="<?php echo (int)$liburua['kodea']; ?>">

        <label for="titulua">Izenburua (4-50 karaktere):</label>
        <input type="text" name="titulua" id="titulua" required minlength="4" maxlength="50" value="<?php echo htmlspecialchars($liburua['titulua']); ?>">

        <label for="autorea">Autorea:</label>
        <input type="text" name="autorea" id="autorea" required value="<?php echo htmlspecialchars($liburua['autorea']); ?>">

        <label>Eskuragarri:</label>
        <label style="display:inline"><input type="radio" name="eskuragarri" value="1" <?php echo $liburua['eskuragarri'] == 1 ? 'checked' : ''; ?> required>✅ Bai</label>
        <label style="display:inline"><input type="radio" name="eskuragarri" value="0" <?php echo $liburua['eskuragarri'] == 0 ? 'checked' : ''; ?> required>❌ Ez</label>
        <p>
            <button type="submit">💾 Aldatu</button>
            <a class="btn grey" href="liburuenKontsulta.php">Utzi</a>
        </p>
    </form>
</main>
<?php include("../includes/footer.php"); ?>
