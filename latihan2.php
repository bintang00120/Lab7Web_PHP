<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Latihan 2 - Variabel, Operator, Percabangan</h2>

        <div class="result-box">
            <?php
            $nama = "Siti";
            $tugas = 85;
            $uts = 78;
            $uas = 90;
            $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

            if ($nilaiAkhir >= 85) {
                $predikat = "A";
            } elseif ($nilaiAkhir >= 75) {
                $predikat = "B";
            } elseif ($nilaiAkhir >= 60) {
                $predikat = "C";
            } else {
                $predikat = "D";
            }

            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
            echo "Predikat: " . $predikat;
            ?>
        </div>

        <p><a href="index.php" class="back-link">&laquo; Kembali</a></p>
    </div>
</body>
</html>
