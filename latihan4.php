<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Latihan 4 - Function</h2>

        <div class="result-box">
            <?php
            function hitungDiskon($harga, $persen) {
                $potongan = $harga * ($persen / 100);
                return $harga - $potongan;
            }

            // Function tambahan
            function hitungLuasPersegiPanjang($panjang, $lebar) {
                return $panjang * $lebar;
            }

            function tentukanKelulusan($nilai) {
                return $nilai >= 60 ? "Lulus" : "Tidak Lulus";
            }

            $hargaAkhir = hitungDiskon(150000, 10);
            echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".") . "<br>";
            echo "Luas persegi panjang 8 x 4: " . hitungLuasPersegiPanjang(8, 4) . "<br>";
            echo "Nilai 75: " . tentukanKelulusan(75) . "<br>";
            echo "Nilai 50: " . tentukanKelulusan(50);
            ?>
        </div>

        <p><a href="index.php" class="back-link">&laquo; Kembali</a></p>
    </div>
</body>
</html>
