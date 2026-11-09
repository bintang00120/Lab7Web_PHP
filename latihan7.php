<?php
$error = null;
$subtotal = null;
$barang = "";

if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
    $barang      = trim($_POST["barang"] ?? "");
    $hargaInput  = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";

    if ($barang === "" || !is_numeric($hargaInput) ||
        !ctype_digit((string)$jumlahInput) ||
        (float)$hargaInput < 0 || (int)$jumlahInput < 1) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
    } else {
        $harga    = (float)$hargaInput;
        $jumlah   = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Latihan 7 - Pengolahan Data Sederhana</h2>

        <?php if ($error !== null): ?>
            <div class="err">
                <p><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></p>
            </div>
        <?php elseif ($subtotal !== null): ?>
            <div class="ok">
                <h3>Ringkasan Transaksi</h3>
                <p>Barang: <?= htmlspecialchars($barang, ENT_QUOTES, "UTF-8") ?></p>
                <p>Subtotal: Rp<?= number_format($subtotal, 0, ",", ".") ?></p>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="barang">Nama barang</label>
                <input id="barang" name="barang" type="text" value="<?= htmlspecialchars($barang, ENT_QUOTES, "UTF-8") ?>" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input id="harga" name="harga" type="number" min="0" step="0.01" value="<?= isset($_POST["harga"]) ? htmlspecialchars($_POST["harga"], ENT_QUOTES, "UTF-8") : "" ?>" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input id="jumlah" name="jumlah" type="number" min="1" step="1" value="<?= isset($_POST["jumlah"]) ? htmlspecialchars($_POST["jumlah"], ENT_QUOTES, "UTF-8") : "" ?>" required>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-primary">Hitung</button>
            </div>
        </form>

        <p><a href="index.php" class="back-link">&laquo; Kembali</a></p>
    </div>
</body>
</html>
