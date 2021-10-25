<?php
    include("config.php");
	if(isset($_GET['id'])){
		$device_id=$_GET['id'];
		global $conn;
		$q=mysqli_query($conn,"select `nilai` from `kontrolrelay` where `id`='".$device_id."'")or die("Unable to Show Result");
		while($f=mysqli_fetch_assoc($q)){
			echo $f['nilai'];
		}
	}
?>
