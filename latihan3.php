<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Latihan 3 - Perulangan dan Array</h2>

        <div class="result-box">
            <?php
            // Ditambah 3 nama baru: Eka, Fajar, Gita
            $mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
            echo "<h3>Daftar Mahasiswa</h3><ol>";
            foreach ($mahasiswa as $nama) {
                echo "<li>" . htmlspecialchars($nama) . "</li>";
            }
            echo "</ol>";
            ?>
        </div>

        <p><a href="index.php" class="back-link">&laquo; Kembali</a></p>
    </div>
</body>
</html>
