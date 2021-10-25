<?php 
include 'connection.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$alamat = $_POST['alamat'];
 
mysqli_query($conn,"INSERT INTO user VALUES('','$nama','$username','$password','$level','$alamat')");
 
header("location:user.php?pesan=input");
?>