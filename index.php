<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produk Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1 class="mb-4 text-center">Daftar Produk</h1>
    <div class="row">
        <?php
        $query = "SELECT * FROM produk";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <?php if (!empty($row['gambar'])): ?>
                    <img src="uploads/<?php echo htmlspecialchars($row['gambar']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['nama']); ?>">
                <?php else: ?>
                    <img src="" class="card-img-top" alt="No Image">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($row['nama']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($row['deskripsi']); ?></p>
                    <p class="card-text fw-bold text-primary">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <a href="#" class="btn btn-success w-100">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>