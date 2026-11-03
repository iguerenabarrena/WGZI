<?php
    include("../includes/auth.php");
    require_once("../post/liburuKontsultaFunctions.php");

    $liburua = (isset($_GET['kodea']) && ctype_digit($_GET['kodea'])) ? hartuLiburua($_GET['kodea']) : false;
    if (!$liburua) {
        header("Location: liburuenKontsulta.php");
        exit();
    }
    include("../includes/header.php");
?>
<main>
    <div class="box">
        <h2 style="color:#e53935">⚠️ Ezabatu liburua</h2>
        <p><strong>Ziur zaude liburu hau ezabatu nahi duzula?</strong></p>
        <ul style="list-style:none">
            <li>📋 <strong>Kodea:</strong> <?php echo (int)$liburua['kodea']; ?></li>
            <li>📖 <strong>Izenburua:</strong> <?php echo htmlspecialchars($liburua['titulua']); ?></li>
            <li>✍️ <strong>Autorea:</strong> <?php echo htmlspecialchars($liburua['autorea']); ?></li>
            <li>📌 <strong>Eskuragarri:</strong> <?php echo $liburua['eskuragarri'] ? '✅ Bai' : '❌ Ez'; ?></li>
        </ul>
        <form action="../post/liburuEzabatu.php" method="post" style="text-align:center">
            <input type="hidden" name="kodea" value="<?php echo (int)$liburua['kodea']; ?>">
            <button type="submit" class="btn red">🗑️ Bai, ezabatu</button>
            <a class="btn green" href="liburuenKontsulta.php">✖ Ez, itzuli</a>
        </form>
    </div>
</main>
<?php include("../includes/footer.php"); ?>
