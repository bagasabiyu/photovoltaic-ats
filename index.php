<!DOCTYPE html>
<html>
<head>
	<title>MONITORING AUTOMATIC TRANSFER SWITCH</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>MONITORING AUTOMATIC TRANSFER SWITCH</h2></center>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p> 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
			<center>			
			</center>
		</form>	
	</div>
</body>
</html>

<!-- jumbotron -->
<section class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</section>
<!-- Akhir jumbotron -->