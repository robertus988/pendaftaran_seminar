<?php ob_start(); ?>
<html>
<head>
    <title>Cetak Form Bukti Pendaftaran</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .garis1 {
            border-bottom: 5px solid black;
            margin-top: 15px;
        }
        .garis2 {
            border-bottom: 2px solid black;
            margin-top: 3px;
            margin-bottom: 15px;
        }

        #daftar {
            text-transform: capitalize;
            font-size: 20px;
        }

        #daftar #th {
            text-transform: uppercase;
        }

        #daftar #email {
            text-transform: lowercase;
        }

        #persyaratan {
            font-size: 18px;
        }


    </style>
</head>
<body>

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="row align-content-start">
            <div class="col-md-2">
                <img src="img/Logo-UKIT.png" width="200px" alt="">
            </div>
            <div class="col-md-10 text-center">
                <h3 class="mb-0">PANITIA SEMINAR IT (INFORMATION TECHNOLOGY)</h3>
                <p class="mb-0">"Implementation of IoT (Internet of Things) in Industrial Revolution 4.0"</p>
                <h3 class="mb-0">PROGRAM STUDI TEKNIK INFORMATIKA <br> FAKULTAS TEKNIK <br> UNIVERSITAS KRISTEN INDONESIA TORAJA</h3>
                <p class="mb-0">Alamat: Kampus II Kakondongan (Lt.5) <br> Jalan Poros Tallunglipu-Sa'dan, Kabupaten Toraja Utara</p>  
            </div>
        </div>
    </div>
</div>
    

<div class="garis1"></div>
<div class="garis2"></div>
<!-- <hr class="my-4"> -->

<?php
// Load file koneksi.php
include "koneksi.php";

       $stambuk = $_GET['stambuk'];

        $query = "SELECT * FROM peserta WHERE stambuk='".$stambuk."'";
        $sql = mysqli_query($connect, $query);
        $data = mysqli_fetch_array($sql);

 ?>

<h2 class="text-center mb-0"><u>BUKTI PENDAFTARAN ONLINE</u></h2>
<h5 class="text-center">SEMINAR IT (INFORMATION TECHNOLOGY)</h5>
<br>

<div class="row justify-content-md-center">
    <div class="col-md-8">
        <table class="table table-borderless" id="daftar">
            <tr>
                <td width="200px" id="th">Tanggal Pendaftaran</td>
                <td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php $tgl=date('j F Y'); echo $tgl;?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td width="200px" id="th">Stambuk</td>
                <td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['stambuk']; ?></td>
            </tr> 
            <tr>
                <td width="200px" id="th">Nama Lengkap</td>
                <td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td width="200px" id="th">Alamat</td>
                <td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['alamat']; ?></td>
            </tr> 
            <tr>
                <td width="200px" id="th">Jenis Kelamin</td>
                <td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td width="200px" id="th">Email</td>
                <td id="email"> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['email']; ?></td>
            </tr> 
            <tr>
                <td width="200px" id="th">No HP</td>
                <td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['no_hp']; ?></td>
            </tr>
            <tr>
                <td width="200px" id="th">Angkatan</td>
                <td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['angkatan']; ?></td>
            </tr> 
            <tr>
                <td width="200px" id="th">Kelas</td>
                <td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['kelas']; ?></td>
            </tr>  
        </table>
        <br><br>

        <div id="persyaratan">
            <p class="mb-0"><u>Persyaratan Peserta (Checklist Panitia)</u></p>
            <ol>
                <li>Bukti Pendaftaran Online (2 lembar)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;&nbsp;&nbsp;]</li>
                <li>Biaya Pendaftaran Rp. 25.000&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;&nbsp;&nbsp;]</li>
            </ol>
        </div>
        <!-- <div class="persyaratan">
            <p class="mb-0"><u>Persyaratan Peserta (Checklist Panitia)</u></p>
            <ol>
                <li>Bukti Pendaftaran Online (2 lembar)<span>[   ]</span> </li>
                <li>Biaya Pendaftaran Rp. 25.000 <span>[   ]</span> </li>
            </ol>
        </div> -->

        <br>

        <p class="text-right">Tanggal Verifikasi : ......... November 2019</p>

        <p class="text-center">Mengetahui</p>
        <div class="row">
                <div class="col-md-6">
                    <p class="text-center"><b>Peserta</b></p>
                    <br><br><br>
                    <p class="text-center">(........................................................)</p>
                </div>
                <div class="col-md-6">
                    <p class="text-center"><b>Panitia</b></p>
                    <br><br><br>
                    <p class="text-center">(........................................................)</p>
                </div>
        </div>

        <br><br><br>
        
        <p class="mb-0"><i>Catatan: <br> 
        <ol type="disc">
            <li>Verifikasi paling lambat pada tanggal <i><b>29 November 2019</b></i></li>
            <li>Contact Person Panitia : 
            <ul type="none">
                <li>- Arfin Mani' Poting (Ketua) : 085146401838</li>
                <li>- Gapitra Pniel Armawantho (Kesekretariatan) : 085340418657</li>
            </ul>
            </li>
        </ol></i>
        </p>
    
    </div>
</div>



<script>
    window.print();
</script>

<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
