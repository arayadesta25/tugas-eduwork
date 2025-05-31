
<?php
// Cek apakah form dikirim lewat metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan hindari XSS dengan htmlspecialchars
    $nama = htmlspecialchars($_POST["nama"] ?? '');
    $harga = htmlspecialchars($_POST["harga"] ?? '');
    $deskripsi = htmlspecialchars($_POST["deskripsi"] ?? '');

    // Validasi sederhana
    if ($nama && $harga && $deskripsi) {
        echo "<!DOCTYPE html>
        <html lang='id'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Produk Ditambahkan</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body>
            <div class='container mt-5'>
                <div class='alert alert-success'>
                    <h4 class='alert-heading'>Produk berhasil ditambahkan!</h4>
                    <p><strong>Nama:</strong> $nama</p>
                    <p><strong>Harga:</strong> Rp " . number_format($harga, 0, ',', '.') . "</p>
                    <p><strong>Deskripsi:</strong> $deskripsi</p>
                    <hr>
                    <a href='index.html' class='btn btn-primary'>Kembali ke Form</a>
                </div>
            </div>
        </body>
        </html>";
    } else {
        echo "<p>Data tidak lengkap.</p>";
    }
} else {
    echo "Akses tidak sah.";
}
?>
