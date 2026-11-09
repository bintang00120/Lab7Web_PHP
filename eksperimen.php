<?php
// 1. Function Rata-rata tiga komponen nilai
function rataRata(float $a, float $b, float $c): float {
    return ($a + $b + $c) / 3;
}

// 3. Function Format Rupiah
function formatRupiah($angka): string {
    return "Rp" . number_format((float)$angka, 0, ",", ".");
}

// Data Mahasiswa untuk eksperimen pencarian
$dataNama = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksperimen Mandiri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Eksperimen Mandiri</h2>

        <!-- Bagian 1: Rata-rata Nilai -->
        <div class="result-box">
            <h3>1. Rata-rata Nilai</h3>
            <p>Tugas 85, UTS 78, UAS 90 &rarr; rata-rata: <strong><?= number_format(rataRata(85, 78, 90), 2) ?></strong></p>
        </div>

        <!-- Bagian 2: Cari Nama (GET) -->
        <div class="result-box">
            <h3>2. Cari Nama (GET)</h3>
            <form method="GET" action="">
                <div class="form-inline">
                    <input name="cari" type="text" placeholder="contoh: a" value="<?= isset($_GET["cari"]) ? htmlspecialchars($_GET["cari"], ENT_QUOTES, "UTF-8") : "" ?>">
                    <button type="submit" class="btn-primary">Cari</button>
                </div>
            </form>

            <?php if (isset($_GET["cari"])): ?>
                <?php
                $cari = trim($_GET["cari"]);
                $hasil = array_filter($dataNama, fn($n) => $cari !== "" && stripos($n, $cari) !== false);
                ?>
                <p>Hasil pencarian: <strong><?= htmlspecialchars($cari, ENT_QUOTES, "UTF-8") ?></strong></p>
                <?php if ($hasil): ?>
                    <ul>
                        <?php foreach ($hasil as $n): ?>
                            <li><?= htmlspecialchars($n, ENT_QUOTES, "UTF-8") ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p><em>Tidak ditemukan.</em></p>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <!-- Bagian 3: Format Rupiah -->
        <div class="result-box">
            <h3>3. Format Rupiah</h3>
            <p><?= formatRupiah(1500000) ?> | <?= formatRupiah(25000) ?></p>
        </div>

        <!-- Bagian 4 & 5: Informasi Integrasi -->
        <div class="result-box">
            <h3>4. Validasi NIM</h3>
            <p>Sudah diterapkan di <a href="mini_project.php">mini_project.php</a>: NIM hanya angka, panjang 8-12 digit.</p>

            <h3 style="margin-top: 16px;">5. Tombol Reset</h3>
            <p>Sudah ditambahkan di <a href="mini_project.php">mini_project.php</a>. Penjelasan lengkap ada di <code>README.md</code>.</p>
        </div>

        <p><a href="index.php" class="back-link">&laquo; Kembali</a></p>
    </div>
</body>
</html>
