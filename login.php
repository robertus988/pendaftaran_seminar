<?php
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
	header("location: tampil_data_admin.php"); // Kita Redirect ke halaman tampil_data_admin.php
}
?>

<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Halaman Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="container">
		<h4 class="text-center">FORM LOGIN</h4>
		<hr>
		
		<div class="text-danger">
			<?php
			// Cek apakah terdapat cookie dengan nama message
			if(isset($_COOKIE["message"])){ // Jika ada
				echo $_COOKIE["message"]; // Tampilkan pesannya
			}
			?>
		</div>
	
	<form method="post" action="proses_login.php">
		<div class="form-group">
			<label>Username</label><br>
			<input type="text" name="username" placeholder="Masukkan Username" class="form-control" required autofocus>
		</div>
		
		<div class="form-group">
			<label>Password</label><br>
			<input type="password" name="password" placeholder="Masukkan Password" class="form-control" required>
		</div>

		<button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
	</form>
	</div>

	<!-- library javascript-->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
