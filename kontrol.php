<?php
include 'connection.php';
$id = $_GET['id'];
$nilai = $_GET['nilai'];
mysqli_query($conn,"UPDATE kontrolrelay SET nilai='$nilai' WHERE id='$id'");
header("location:monitoring.php");
?>
