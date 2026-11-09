<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Latihan 5 - Form GET</h2>

        <form method="GET" action="">
            <div class="form-group">
                <label for="kata">Kata kunci:</label>
                <div class="form-inline">
                    <input id="kata" name="kata" type="text" value="<?= isset($_GET["kata"]) ? htmlspecialchars($_GET["kata"], ENT_QUOTES, "UTF-8") : "" ?>">
                    <button type="submit" class="btn-primary">Cari</button>
                </div>
            </div>
        </form>

        <?php
        if (isset($_GET["kata"])) {
            $kata = trim($_GET["kata"]);
            echo "<div class='result-box'>Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8") . "</div>";
        }
        ?>

        <p><a href="index.php" class="back-link">&laquo; Kembali</a></p>
    </div>
</body>
</html>
