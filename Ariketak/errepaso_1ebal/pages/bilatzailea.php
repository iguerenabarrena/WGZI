<?php
    include("../includes/auth.php");
    include("../includes/header.php");
    require_once("../post/liburuKontsultaFunctions.php");

    $titulua     = trim($_GET['titulua'] ?? '');
    $autorea     = trim($_GET['autorea'] ?? '');
    $eskuragarri = $_GET['eskuragarri'] ?? '';
    $bilatu      = isset($_GET['bilatu']);
    $emaitzak    = $bilatu ? bilatuLiburuak($titulua, $autorea, $eskuragarri) : [];
?>
<main>
    <h2>🔍 Bilatzailea</h2>
    <form method="get" action="bilatzailea.php">
        <label for="titulua">Izenburua:</label>
        <input type="text" id="titulua" name="titulua" value="<?php echo htmlspecialchars($titulua); ?>">
        <label for="autorea">Autorea:</label>
        <input type="text" id="autorea" name="autorea" value="<?php echo htmlspecialchars($autorea); ?>">
        <label>Eskuragarri:</label>
        <label style="display:inline"><input type="radio" name="eskuragarri" value="" <?php echo $eskuragarri === '' ? 'checked' : ''; ?>>Edozein</label>
        <label style="display:inline"><input type="radio" name="eskuragarri" value="1" <?php echo $eskuragarri === '1' ? 'checked' : ''; ?>>Bai</label>
        <label style="display:inline"><input type="radio" name="eskuragarri" value="0" <?php echo $eskuragarri === '0' ? 'checked' : ''; ?>>Ez</label>
        <p><input type="submit" name="bilatu" value="Bilatu"></p>
    </form>

    <?php if ($bilatu): ?>
        <p><strong>Emaitzak:</strong> <?php echo count($emaitzak); ?></p>
        <?php if ($emaitzak): ?>
        <table>
            <thead><tr><th>Kodea</th><th>Izenburua</th><th>Autorea</th><th>Eskuragarri?</th></tr></thead>
            <tbody>
            <?php foreach ($emaitzak as $l): ?>
                <tr>
                    <td><?php echo (int)$l['kodea']; ?></td>
                    <td><?php echo htmlspecialchars($l['titulua']); ?></td>
                    <td><?php echo htmlspecialchars($l['autorea']); ?></td>
                    <td><?php echo $l['eskuragarri'] ? 'Bai' : 'Ez'; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>Ez da libururik aurkitu.</p>
        <?php endif; ?>
    <?php endif; ?>
</main>
<?php include("../includes/footer.php"); ?>
