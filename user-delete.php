<?php 
include 'connection.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM user WHERE id='$id'")or die(mysql_error());
 
header("location:user.php?pesan=hapus");
?>