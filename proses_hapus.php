<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data stambuk yang dikirim oleh index.php melalui URL
$stambuk = $_GET['stambuk'];

// Query untuk menampilkan data peserta berdasarkan stambuk yang dikirim
$query = "SELECT * FROM peserta WHERE stambuk='".$stambuk."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Query untuk menghapus data peserta berdasarkan stambuk yang dikirim
$query2 = "DELETE FROM peserta WHERE stambuk='".$stambuk."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'tampil_data_admin.php';
            </script>
        ";
	// header("location: tampil_data_admin.php"); // Redirect ke halaman tampil_data_admin.php
}else{
	// Jika Gagal, Lakukan :
	echo "
            <script>
                alert('data gagal dihapus');
                document.location.href = 'tampil_data_admin.php';
            </script>
        ";
	// echo "Data gagal dihapus. <a href='tampil_data_admin.php'>Kembali</a>";
}
?>
