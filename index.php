<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4 text-center">toko madura </h1>
    <form method="GET" class="row mb-4">
    <div class="col-md-4">
        <input type="text" name="cari" class="form-control" placeholder="Cari nama produk..." value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    </div>
    <div class="col-md-3">
        <input type="number" name="min" class="form-control" placeholder="Harga Min" value="<?php echo isset($_GET['min']) ? $_GET['min'] : ''; ?>">
    </div>
    <div class="col-md-3">
        <input type="number" name="max" class="form-control" placeholder="Harga Max" value="<?php echo isset($_GET['max']) ? $_GET['max'] : ''; ?>">
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">Filter</button>
    </div>
</form>

    <div class="row">

    <?php
    // $sql = "SELECT * FROM produk"
    $where = [];

if (!empty($_GET['cari'])) {
    $cari = $conn->real_escape_string($_GET['cari']);
    $where[] = "nama LIKE '%$cari%'";
}

if (!empty($_GET['min'])) {
    $min = (int) $_GET['min'];
    $where[] = "harga >= $min";
}

if (!empty($_GET['max'])) {
    $max = (int) $_GET['max'];
    $where[] = "harga <= $max";
}

$sql = "SELECT * FROM produk";
if (!empty($where)) {
    $sql .= " WHERE " . implode(" AND ", $where);
}

$result = $conn->query($sql);

    $result = $conn->query($sql);

    if ($result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
    ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?php echo $row['gambar']; ?>" class="card-img-top" alt="<?php echo $row['nama']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['nama']; ?></h5>
                    <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                    <p class="card-text text-primary">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
    <?php
        endwhile;
    else:
        echo "<p class='text-center'>Tidak ada produk tersedia.</p>";
    endif;
    ?>
   
    </div>
</div>
</body>
</html>
