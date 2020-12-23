<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$stambuk = $_GET['stambuk'];
	
	// Query untuk menampilkan data peserta berdasarkan stambuk yang dikirim
	$query = "SELECT * FROM peserta WHERE stambuk='".$stambuk."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>

	<div class="container">
		<h2>Ubah Data peserta</h2>
		<hr>
		<form method="post" action="proses_edit.php?stambuk=<?php echo $stambuk; ?>">
		<table class="table table-borderless">
		<tr>
			<td>Stambuk </td>
			<td><input type="text" name="stambuk" value="<?php echo $data['stambuk']; ?>" class="form-control" readonly></td>
		</tr>
		<tr>
			<td>Nama </td>
			<td><input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>" class="form-control"></td>
		</tr>
		<tr>
			<td>Alamat </td>
			<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
			<?php
			if($data['jenis_kelamin'] == "Laki-laki"){
				echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
				echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
			}else{
				echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
				echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
			}
			?>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $data['email']; ?>" class="form-control"></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>" class="form-control"></td>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td><input type="text" name="angkatan" value="<?php echo $data['angkatan']; ?>" class="form-control"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" class="form-control"></td>
		</tr>
		
		</table>
		
		<hr>
		<button type="submit" value="Edit" class="btn btn-primary">
			Edit
		</button>
		<!-- <input type="submit" value="Edit"> -->
		<a href="tampil_data_admin.php"><input type="button" value="Batal" class="btn btn-danger"></a>
		</form>
	</div>
</body>
</html>
