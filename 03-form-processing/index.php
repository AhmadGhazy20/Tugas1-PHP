
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Form Processing</title>
</head>
<body>
    <h2>1. Form GET</h2>

    <form method="GET">
        <label>Nama:</label>
        <input type="text" name="nama">
        <button type="submit">Kirim GET</button>
    </form>

    <?php
    if (isset($_GET['nama']) && $_GET['nama'] !== '') {
        echo "Halo, " . htmlspecialchars($_GET['nama']);
    }
    ?>

    <hr>

    <h2>2. Form POST</h2>

    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit" name="kirim">Kirim POST</button>
    </form>

    <?php
    if (isset($_POST['kirim'])) {
        echo "Email kamu: " .
            htmlspecialchars($_POST['email']);
    }
    ?>
</body>
</html>
