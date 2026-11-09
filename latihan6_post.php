<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Latihan 6 - Form POST</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input id="nama" name="nama" type="text" required>
            </div>

            <div class="form-group">
                <label for="prodi">Program Studi:</label>
                <input id="prodi" name="prodi" type="text" required>
            </div>

            <div class="btn-group">
                <button type="submit" name="kirim" class="btn-primary">Kirim Data</button>
            </div>
        </form>

        <?php
        if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
            $nama  = trim($_POST["nama"] ?? "");
            $prodi = trim($_POST["prodi"] ?? "");

            if ($nama === "" || $prodi === "") {
                echo "<div class='err'><p>Semua kolom wajib diisi.</p></div>";
            } else {
                echo "<div class='ok'>";
                echo "<h3>Data diterima</h3>";
                echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
                echo "Program Studi: " . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
                echo "</div>";
            }
        }
        ?>

        <p><a href="index.php" class="back-link">&laquo; Kembali</a></p>
    </div>
</body>
</html>
