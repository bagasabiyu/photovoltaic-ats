<?php
/* local connection_status 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coba1"; */

//remote con
$servername = "remotemysql.com";
$username = "Zfh7LQssNy";
$password = "hnvs5udDli";
$dbname = "Zfh7LQssNy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?>