<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_db"; // Ganti dengan nama database yang sudah Anda buat

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
