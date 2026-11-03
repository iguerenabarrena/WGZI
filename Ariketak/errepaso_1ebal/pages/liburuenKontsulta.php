<?php
    include("../includes/auth.php");
    include("../includes/header.php");
    require_once("../post/liburuKontsultaFunctions.php");
    $liburuak = hartuLiburuak();
?>
<main>
    <h2>📖 Liburuen kontsulta</h2>
    <p style="text-align:center"><a class="btn" href="./liburuBerria.php">➕ Liburu berria sortu</a></p>
    <p><strong>Guztira:</strong> <?php echo count($liburuak); ?> liburu aurkitu dira</p>
    <table>
        <thead>
            <tr><th>Kodea</th><th>Izenburua</th><th>Autorea</th><th>Eskuragarri?</th><th>Ekintzak</th></tr>
        </thead>
        <tbody>
        <?php foreach ($liburuak as $l): ?>
            <tr>
                <td><?php echo (int)$l['kodea']; ?></td>
                <td><?php echo htmlspecialchars($l['titulua']); ?></td>
                <td><?php echo htmlspecialchars($l['autorea']); ?></td>
                <td><?php echo $l['eskuragarri'] ? '<span class="ok">✅ Bai</span>' : '<span class="ko">❌ Ez</span>'; ?></td>
                <td>
                    <a class="btn blue" href="liburuEditatu.php?kodea=<?php echo (int)$l['kodea']; ?>">✏️ Aldatu</a>
                    <a class="btn red" href="liburuEzabatu.php?kodea=<?php echo (int)$l['kodea']; ?>">🗑️ Ezabatu</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include("../includes/footer.php"); ?>
