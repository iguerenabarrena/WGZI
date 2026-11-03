<?php
    include("../includes/auth.php");
    include("../includes/header.php");
?>
<main>
    <h2>Liburu berria sortu</h2>
    <form action="../post/liburuBerriaForm.php" method="post" id="liburuBerria">
        <label for="izenburua">Izenburua (4-50 karaktere):</label>
        <input type="text" id="izenburua" name="izenburua" required minlength="4" maxlength="50" placeholder="Adib: Don Quijote">
        <label for="autorea">Autorea:</label>
        <input type="text" id="autorea" name="autorea" required placeholder="Adib: Miguel de Cervantes">
        <label>Eskuragarri dago?</label>
        <label style="display:inline"><input type="radio" name="eskuragarri" value="1" required>✅ Bai</label>
        <label style="display:inline"><input type="radio" name="eskuragarri" value="0" required>❌ Ez</label>
        <p>
            <input type="submit" value="Gorde" name="gorde">
            <input type="reset" value="Garbitu" name="garbitu">
        </p>
    </form>
</main>
<?php include("../includes/footer.php"); ?>
