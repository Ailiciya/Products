<?php
include 'koneksi.php';

$id_product = $_GET['id'];

$sql = "SELECT * FROM products WHERE id_product='$id_product'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No record found";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Edit Product</h1>
        <form method="POST" action="aksi_edit.php">
            <input type="hidden" name="id_product" value="<?php echo $row['id_product']; ?>">
            <div class="mb-3">
                <label for="nama_product" class="form-label">Nama Product</label>
                <input type="text" class="form-control" id="nama_product" name="nama_product" value="<?php echo $row['nama_product']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jenis_product" class="form-label">Jenis Product</label>
                <input type="text" class="form-control" id="jenis_product" name="jenis_product" value="<?php echo $row['jenis_product']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_product" class="form-label">Jumlah Product</label>
                <input type="text" class="form-control" id="jumlah_product" name="jumlah_product" value="<?php echo $row['jumlah_product']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="keterangan_product" class="form-label">Keterangan</label>
                <textarea class="form-control" id="Keterangan_product" name="Keterangan_product" rows="3" required><?php echo $row['keterangan_product']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="tampil_data.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
