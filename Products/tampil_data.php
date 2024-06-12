<?php
include 'koneksi.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Data Products</h1>
        <a href="form_product_tambah.php" class="btn btn-primary mb-3">Tambah Product</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Product</th>
                    <th>Nama Product</th>
                    <th>Jenis Product</th>
                    <th>Jumlah Product</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_product"] . "</td>";
                        echo "<td>" . $row["nama_product"] . "</td>";
                        echo "<td>" . $row["jenis_product"] . "</td>";
                        echo "<td>" . $row["jumlah_product"] . "</td>";
                        echo "<td>" . $row["keterangan_product"] . "</td>";
                        echo "<td>
                                <a href='form_edit_product.php?id=" . $row["id_product"] . "' class='btn btn-warning'>Edit</a>
                                <a href='delete.php?id=" . $row["id_product"] . "' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No records found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
