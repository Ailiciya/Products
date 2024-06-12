<?php
include 'koneksi.php';

$id_product = $_GET['id'];

$sql = "DELETE FROM products WHERE id_product='$id_product'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: tampil_data.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
