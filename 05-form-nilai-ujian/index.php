
<?php
$nama = "";
$email = "";
$nilai = "";
$status = "";
$diproses = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $nilaiInput = trim($_POST["nilai"] ?? "");

    if ($nama !== "" && filter_var($email, FILTER_VALIDATE_EMAIL) && $nilaiInput !== "" && is_numeric($nilaiInput) && $nilaiInput >= 0 && $nilaiInput <= 100) {
        $nilai = (float) $nilaiInput;
        $diproses = true;

        if ($nilai > 70) {
            $status = "Lulus";
        } elseif ($nilai < 70) {
            $status = "Remedial";
        } else {
            $status = "Nilai tepat 70 — perlu konfirmasi aturan tugas";
        }
    } else {
        $error = "Isi nama, email yang valid, dan nilai antara 0 sampai 100.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengecekan Nilai Ujian</title>
</head>
<body>
    <h1>Form Nilai Ujian</h1>

    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required
               value="<?= htmlspecialchars($nama) ?>"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required
               value="<?= htmlspecialchars($email) ?>"><br><br>

        <label for="nilai">Nilai Ujian:</label><br>
        <input type="number" id="nilai" name="nilai"
               min="0" max="100" step="any" required
               value="<?= htmlspecialchars((string) $nilai) ?>"><br><br>

        <button type="submit">Periksa Nilai</button>
    </form>

    <?php if (isset($error) && $error !== ""): ?>
        <p><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($diproses): ?>
        <h2>Hasil Ujian</h2>
        <p>Nama: <?= htmlspecialchars($nama) ?></p>
        <p>Email: <?= htmlspecialchars($email) ?></p>
        <p>Nilai: <?= htmlspecialchars((string) $nilai) ?></p>
        <p>Status: <strong><?= htmlspecialchars($status) ?></strong></p>
    <?php endif; ?>
</body>
</html>
