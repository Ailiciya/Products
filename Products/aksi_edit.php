<?php
include 'koneksi.php';

$id_product = $_POST['id_product'];
$nama_product = $_POST['nama_product'];
$jenis_product = $_POST['jenis_product'];
$jumlah_product = $_POST['jumlah_product'];
$keterangan_product = $_POST['Keterangan_product'];

$sql = "UPDATE products SET 
        nama_product='$nama_product', 
        jenis_product='$jenis_product', 
        jumlah_product='$jumlah_product', 
        keterangan_product='$keterangan_product' 
        WHERE id_product='$id_product'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: tampil_data.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
