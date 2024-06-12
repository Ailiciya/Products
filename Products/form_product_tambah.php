<!DOCTYPE html>
<html>
<head>
    <title>Tambah Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Tambah Product</h1>
        <form method="POST" action="aksi_simpan.php">
            <div class="mb-3">
                <label for="id_product" class="form-label">ID Product</label>
                <input type="text" class="form-control" id="id_product" name="id_product" required>
            </div>
            <div class="mb-3">
                <label for="nama_product" class="form-label">Nama Product</label>
                <input type="text" class="form-control" id="nama_product" name="nama_product" required>
            </div>
            <div class="mb-3">
                <label for="jenis_product" class="form-label">Jenis Product</label>
                <input type="text" class="form-control" id="jenis_product" name="jenis_product" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_product" class="form-label">Jumlah Product</label>
                <input type="text" class="form-control" id="jumlah_product" name="jumlah_product" required>
            </div>
            <div class="mb-3">
                <label for="keterangan_product" class="form-label">Keterangan</label>
                <textarea class="form-control" id="Keterangan_product" name="Keterangan_product" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>