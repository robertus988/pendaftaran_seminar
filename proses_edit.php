<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$stambuk = $_GET['stambuk'];

// Ambil Data yang Dikirim dari Form
$stambuk = $_POST['stambuk'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$angkatan = $_POST['angkatan'];
$kelas = $_POST['kelas'];


// Proses ubah data ke Database
$query = "UPDATE peserta SET nama_lengkap='".$nama_lengkap."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', email='".$email."', no_hp='".$no_hp."', angkatan='".$angkatan."', kelas='".$kelas."'  WHERE stambuk='".$stambuk."'";
$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'tampil_data_admin.php';
            </script>
        ";
	// header("location: tampil_data_admin.php"); // Redirect ke halaman tampil_data_admin.php
} else {
	// Jika Gagal, Lakukan :
	echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'tampil_data_admin.php';
            </script>
        ";
	// echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	// echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}


?>
