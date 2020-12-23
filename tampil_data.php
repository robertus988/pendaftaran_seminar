<html>
<head>
    <title>Seminar IT</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/datatables.min.css"> -->
    <!-- <link rel="stylesheet" href="datatables/lib/css/dataTables.bootstrap.min.css"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
</head>
<body>
    <h2 class="alert alert-primary text-center mt-3">Daftar Peserta Seminar</h2>

    <!-- <div class="row">
        <div class="col-md-6">
            <a href="index.php" class="btn btn-sm btn-danger mb-2 ml-1">Kembali</a>
        </div>
        <div class="col-md-6 align-content-md-end">
            <form action="" method="post" class="form-inline mb-2 ml-1">
                <input type="search" name="keyword" placeholder="cari data" class="form-control mr-1" aria-label="Search" autofocus>
                <input type="submit" name="cari" value="Search">
                <button class="btn btn-outline-primary" type="submit" name="cari" value="Search">Search</button>
            </form>
        </div>
    </div> -->

    <nav class="navbar navbar-light bg-light mb-0">
      <a href="index.php" class="btn btn-sm btn-danger mb-2 ml-1">Back To Home</a>
      <form action="" method="post" class="form-inline">
        <input type="search" name="keyword" placeholder="cari data" class="form-control" aria-label="Search" autofocus>
        <button class="btn btn-outline-success" type="submit" name="cari" value="Search">Search</button>
      </form>
    </nav> 

    <table class="table table-bordered table-striped table-hover mt-0">
    <tr>
        <th>No</th>
        <th>Stambuk</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>No. HP</th>
        <th>Angkatan</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>

    <?php
        error_reporting(0);
        // Load file koneksi.php
        include "koneksi.php";

        $keyword = $_POST['keyword'];

        if($keyword != ''){
             $query = "SELECT * FROM peserta WHERE  stambuk LIKE '".$keyword."' OR 
                nama_lengkap LIKE '%".$keyword."%' OR
                alamat LIKE '%".$keyword."%' OR
                jenis_kelamin LIKE '%".$keyword."%' OR
                no_hp LIKE '%".$keyword."%' OR
                email LIKE '%".$keyword."%' OR
                angkatan LIKE '%".$keyword."%' OR
                kelas LIKE '%".$keyword."%'
            ";
        } else {
            $query = "SELECT * FROM peserta"; // Query untuk menampilkan semua data peserta seminar    
        }
        
        
        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

        $i = 1;

        
        while($data = mysqli_fetch_array($sql)) { 

         ?>
        <!-- Ambil semua data dari hasil eksekusi $sql -->

        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['stambuk']; ?></td>
            <td><?php echo $data['nama_lengkap']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><?php echo $data['angkatan']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td><a href="print.php?stambuk=<?php echo $data['stambuk'] ?>" target="_BLANK" class="btn btn-sm btn-primary mb-2 ml-1">Cetak</a></td>
        </tr>
    
    <?php } ?>

    </table>

    
    <!-- <script src="datatables/lib/js/dataTables.bootstrap.min.js"></script> -->
    <!-- <script src="js/datatables.min.js"></script> -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
