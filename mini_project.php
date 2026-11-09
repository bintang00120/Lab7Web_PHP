<?php
// ===== BAGIAN PEMROSESAN =====
$data = null;
$error = [];
$nama = $nim = $prodi = $semesterInput = $email = "";

if (($_SERVER["REQUEST_METHOD"] ?? "") === "POST") {
    $nama          = trim($_POST["nama"] ?? "");
    $nim           = trim($_POST["nim"] ?? "");
    $prodi         = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email         = trim($_POST["email"] ?? "");

    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }

    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) < 8 || strlen($nim) > 12) {
        $error[] = "NIM harus berupa angka 8-12 digit.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (!ctype_digit((string)$semesterInput) ||
        (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}

function e($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, "UTF-8");
}
?>
<!-- ===== BAGIAN TAMPILAN ===== -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Data Mahasiswa</h2>

        <?php if ($error): ?>
            <div class="err">
                <strong>Terdapat kesalahan:</strong>
                <ul>
                    <?php foreach ($error as $msg): ?>
                        <li><?= e($msg) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($data): ?>
            <div class="ok">
                <h3>Data berhasil diterima</h3>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= e($data["nama"]) ?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: <?= e($data["nim"]) ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>: <?= e($data["prodi"]) ?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>: <?= e($data["semester"]) ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <?= e($data["email"]) ?></td>
                    </tr>
                </table>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input id="nama" name="nama" type="text" value="<?= e($nama) ?>">
            </div>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input id="nim" name="nim" type="text" value="<?= e($nim) ?>">
            </div>

            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <input id="prodi" name="prodi" type="text" value="<?= e($prodi) ?>">
            </div>

            <div class="form-group">
                <label for="semester">Semester (1-14)</label>
                <input id="semester" name="semester" type="text" value="<?= e($semesterInput) ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" value="<?= e($email) ?>">
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-primary">Kirim</button>
                <button type="reset" class="btn-secondary">Reset</button>
            </div>
        </form>

        <p><a href="index.php" class="back-link">&laquo; Kembali</a></p>
    </div>
</body>
</html>
