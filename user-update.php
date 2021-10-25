<?php 
include 'connection.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$alamat = $_POST['alamat'];
 
mysqli_query($conn,"UPDATE user SET nama='$nama', username='$username', password='$password', level='$level', alamat='$alamat' WHERE id='$id'");
 
header("location:user.php?pesan=update");
?>