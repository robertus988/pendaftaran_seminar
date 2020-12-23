<?php 

include "koneksi.php";
    $stambuk = htmlspecialchars($_POST['stambuk']);
    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $email = htmlspecialchars($_POST['email']);
    $no_hp = htmlspecialchars($_POST['no_hp']);
    $angkatan = htmlspecialchars($_POST['angkatan']);
    $kelas = htmlspecialchars($_POST['kelas']);

    // query insert data
    $query = "INSERT INTO peserta 
                    VALUES
                ('$stambuk','$nama_lengkap','$alamat','$jenis_kelamin','$email','$no_hp','$angkatan','$kelas')
            ";
    $sql = mysqli_query($connect, $query);

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'tampil_data.php';
            </script>";
        // header("location: tampil_data.php"); // Redirect ke halaman index.php
    }else{
        // Jika Gagal, Lakukan :
        // echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        // echo "<br><a href='index.php'>Kembali Ke Form</a>";
        echo "<script>
                alert('Ada masalah saat proses insert ke Database, pastikan Stambuk yang kalian masukkan belum terdaftar, silahkan isikan kembali data yang valid');
                document.location.href = 'index.php';
            </script>";
    }

 ?>