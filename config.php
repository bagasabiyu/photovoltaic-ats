<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coba1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?>