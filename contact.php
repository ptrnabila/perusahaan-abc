<?php include 'header.php'; ?>
<main>
    <h2>Hubungi Kami</h2>
    <form method="post" action="contact.php">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Pesan:</label><br>
        <textarea name="pesan" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);
        $pesan = htmlspecialchars($_POST["pesan"]);

        echo "<p>Terima kasih, $nama. Pesan Anda telah kami terima.</p>";
        // Di dunia nyata, di sini Anda bisa mengirim email atau menyimpan ke database.
    }
    ?>
</main>
<?php include 'footer.php'; ?>
