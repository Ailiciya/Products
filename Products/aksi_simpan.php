<?php
include 'koneksi.php';

$nama_product = $_POST['nama_product'];
$jenis_product = $_POST['jenis_product'];
$jumlah_product = $_POST['jumlah_product'];
$keterangan_product = $_POST['Keterangan_product'];

$sql = "INSERT INTO products (nama_product, jenis_product, jumlah_product, keterangan_product)
        VALUES ('$nama_product', '$jenis_product', '$jumlah_product', '$keterangan_product')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: tampil_data.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
