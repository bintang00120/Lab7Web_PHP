<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Belajar PHP</h1>
        
        <div class="result-box">
            <?php
            echo "<p>PHP berhasil dijalankan.</p>";
            echo "<p>Waktu server: " . date("d-m-Y H:i:s") . "</p>";
            ?>
        </div>

        <hr>

        <h3>Daftar Latihan</h3>
        <ul class="menu-list">
            <li><a href="latihan2.php">Latihan 2 - Variabel, operator, percabangan</a></li>
            <li><a href="latihan3.php">Latihan 3 - Perulangan dan array</a></li>
            <li><a href="latihan4.php">Latihan 4 - Function</a></li>
            <li><a href="latihan5_get.php">Latihan 5 - Form GET</a></li>
            <li><a href="latihan6_post.php">Latihan 6 - Form POST</a></li>
            <li><a href="latihan7.php">Latihan 7 - Pengolahan data</a></li>
            <li><a href="mini_project.php">Mini Project - Form Data Mahasiswa</a></li>
            <li><a href="eksperimen.php">Eksperimen Mandiri</a></li>
        </ul>
    </div>
</body>
</html>
