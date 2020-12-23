<?php

require 'koneksi.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>Seminar IT</title>
  </head>
  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/Logo-UKIT.png" width="30" height="30" class="d-inline-block align-center mb-2" alt="">
          Seminar IT
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link btn btn-primary text-white tombol" href="#pendaftaran">Pendaftaran</a>
            <a class="nav-item nav-link" href="#pemateri">Pemateri</a>
            <a class="nav-item nav-link" href="#tentang">Tentang Kami</a>
            <a class="nav-item nav-link" href="#hubungi">Hubungi Kami</a>
            <!-- <a class="nav-item nav-link btn btn-primary text-white tombol" href="tampil_data.php">DAFTAR PESERTA</a> -->
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h2 class="display-3"><strong>Seminar IT (Information Technology)</strong> <br> "Implementation of IoT (Internet of Things) in Industrial Revolution 4.0"<br>Teknik Informatika UKI Toraja<br><br> <em>Senin, 2 Desember 2019</em> </h1>
              <br>
            <!-- <a href="#pendaftaran" class="btn btn-success tombol" role="button">Daftar</a> -->

          </div>
        </div>
      </div>
    </div>
    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

      <br>

       <div class="card">
        <h2 id="pendaftaran" class="card-header text-center"><strong>Form Pendaftaran Seminar</strong></h6>
        <div class="card-body">
           
            <form action="proses_simpan.php" method="post">
             <!--  <a href="tampil_data.php" class="btn btn-sm btn-warning">Cek Data</a> -->
                    <div class="form-group">
                      <div class="form-row justify-content-md-center">
                          <div class="col-md-2 col-sm-2 col-xs-6 mt-2">
                              <label for="stambuk">Stambuk</label>
                          </div>
                          <div class="col-md-7 col-sm-6 col-xs-6">
                              <input type="text" name="stambuk" id="stambuk" class="form-control" placeholder="Masukkan Stambuk" required>
                          </div>
                      </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 mt-2">
                            <label for="nama_lengkap">Nama Lengkap</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukkan Nama" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 mt-2">
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" checked>
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 mt-2">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 mt-2">
                            <label for="no_hp">No. HP</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No. HP" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 mt-2">
                            <label for="angkatan">Angkatan</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <select name="angkatan" class="custom-select">
                                <option selected>Pilih Angkatan</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 mt-2">
                            <label for="kelas">Kelas</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <select name="kelas" class="custom-select">
                                <option selected>Pilih Kelas</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>
                        </div>
                    </div>
                </div>

        </div>
        <div class="card-footer text-center">
            <button type="submit" name="submit" class="btn btn-primary btn-md" id="tombol-daftar">Daftar</button>
            <a href="tampil_data.php" class="btn btn-danger">Cek</a>
        </div>

        </form>
      </div>

      <!-- Pemateri -->
      <section class="row pemateri mb-5" id="pemateri">
        <!-- <h2>Pemateri</h2> -->
        <div class="container">
          <div class="row pt-5 mb-5  mt-5 text-center">
            <div class="col">
              <h2>Pemateri</h2>
            </div>
          </div>

      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/pembicara.jpg" class="img-fluid" alt="Dr. Ir. Zahir Zainuddin, M.Sc.">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title mb-0">Dr. Ir. Zahir Zainuddin, M.Sc.</h3>
                  <p class="card-text mb-3 text-dark"><strong>0027046402</strong> </p>
                  <ul type="square">
                    <li><small class="text-muted">Dosen Departemen Teknik Informatika dan Teknik Elektro Universitas Hasanuddin Makassar</small></li>
                    <li><small class="text-muted">Kepala Program Studi S2 Sistem Komputer STMIK Handayani</small></li>
                    <li><small class="text-muted">Riset : Sistem Berbasis Komputer, Artificial Intelligent, Image Processing, Computer Vision, Smart City, Pervasive Computing, Internet of Things</small></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
      </section>
      <!-- akhir Pemateri -->
      <br>
      
      
    </div>

     <!-- Tentang Kami -->
  <section class="portfolio mt-5 text-center" id="tentang">
    <div class="container">
      <div class="row pt-4 mb-4 mt-5">
        <div class="col">
          <h2>Tentang Kami</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Ketua Panitia</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3862-2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Arfin Mani' Poting</p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Sekretaris</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3838-2-1.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Grace Agnes Bangun Allo</p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Bendahara</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3844-2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Marni Dudung</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Koordinator Bidang Kesekretariatan</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3843-2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Gapitra Pniel Armawantho</p>
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Daftar Anggota</a> -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar-anggota-kesek">
                Daftar Anggota
              </button>
              <!-- Modal Sie Kesekretariatan-->
              <div class="modal fade" id="daftar-anggota-kesek" tabindex="-1" role="dialog" aria-labelledby="daftar-anggota-kesekLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="daftar-anggota-kesekLabel">Daftar Anggota</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Kesekretariatan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/robertus.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Robertus</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Kesekretariatan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/FB_IMG_15745249815898048.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Otniel Rismawantho Tangketasik</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Kesekretariatan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/iriantos.jpeg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Irianto Sarira</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Kesekretariatan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/diaz.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Faldias Eko Anugra</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Kesekretariatan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/FB_IMG_15745280083690909.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Risma Lukas Raba'</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Kesekretariatan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/rutt.png" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Rut</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Koordinator Bidang Dana</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3841-2-1.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Marchelino Dwi Putra Siappa'</p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar-anggota-dana">
                Daftar Anggota
              </button>
              <!-- Modal Sie Dana-->
              <div class="modal fade" id="daftar-anggota-dana" tabindex="-1" role="dialog" aria-labelledby="daftar-anggota-danaLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="daftar-anggota-danaLabel">Daftar Anggota</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dana</p>
                            </div>
                            <img class="card-img-top" src="img/profil/melkirp.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Melki Rante Payung</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dana</p>
                            </div>
                            <img class="card-img-top" src="img/profil/FB_IMG_15745252445102243.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Ferdian Daniel Pakiding</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dana</p>
                            </div>
                            <img class="card-img-top" src="img/profil/adol.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Adolfina Salempa</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dana</p>
                            </div>
                            <img class="card-img-top" src="img/profil/nengsih.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Nengsi Kiding Allo</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dana</p>
                            </div>
                            <img class="card-img-top" src="img/profil/risnalukas.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Risna Lukas Raba'</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dana</p>
                            </div>
                            <img class="card-img-top" src="img/profil/irfarante.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Irfa Rante</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Koordinator Bidang Acara</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3848-2-1.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Asrin Tandungan</p>
            </div>
             <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar-anggota-acara">
                Daftar Anggota
              </button>
              <!-- Modal Sie Acara-->
              <div class="modal fade" id="daftar-anggota-acara" tabindex="-1" role="dialog" aria-labelledby="daftar-anggota-acaraLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="daftar-anggota-acaraLabel">Daftar Anggota</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Acara</p>
                            </div>
                            <img class="card-img-top" src="img/profil/artian.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Artian Puya</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Acara</p>
                            </div>
                            <img class="card-img-top" src="img/profil/arbina.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Arbina Agatha</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Acara</p>
                            </div>
                            <img class="card-img-top" src="img/profil/akesia.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Akesia Bua Rante</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Acara</p>
                            </div>
                            <img class="card-img-top" src="img/profil/amaria.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Amarya Sula</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Acara</p>
                            </div>
                            <img class="card-img-top" src="img/profil/popang.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Alvianus Tangdi Popang</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Acara</p>
                            </div>
                            <img class="card-img-top" src="img/profil/yensi.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Yensi Taruk Tiku</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Koordinator <br> Bidang Konsumsi</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3850-2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Alsiska Salinding</p>
            </div>
             <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar-anggota-konsumsi">
                Daftar Anggota
              </button>
              <!-- Modal Sie Kesekretariatan-->
              <div class="modal fade" id="daftar-anggota-konsumsi" tabindex="-1" role="dialog" aria-labelledby="daftar-anggota-konsumsiLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="daftar-anggota-konsumsiLabel">Daftar Anggota</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Konsumsi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/ayu.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Ayu Astrina</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Konsumsi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/dicky.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Wisnu Dwiki</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Konsumsi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/weren.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Weren Christian</p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Konsumsi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/mersi.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Sartiani La'ta' Pasae</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Konsumsi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/yeni.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Elisabeth Yeni</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Konsumsi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/FB_IMG_15745280569395365.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Asnita Pulung</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Konsumsi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/FB_IMG_15745281760392971.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">merlin Rangan</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Koordinator <br> Bidang Humas & Perlengkapan</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3852-2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Miftahul Hadi Saputra</p>
            </div>
             <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar-anggota-humas">
                Daftar Anggota
              </button>
              <!-- Modal Sie Perlengkapan dan Humas-->
              <div class="modal fade" id="daftar-anggota-humas" tabindex="-1" role="dialog" aria-labelledby="daftar-anggota-humasLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="daftar-anggota-humasLabel">Daftar Anggota</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Perlengkapan & Humas</p>
                            </div>
                            <img class="card-img-top" src="img/profil/enok.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Enohk Eightry Patalo</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Perlengkapan & Humas</p>
                            </div>
                            <img class="card-img-top" src="img/profil/silems.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Sylem Sarira</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Perlengkapan & Humas</p>
                            </div>
                            <img class="card-img-top" src="img/profil/kristo.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Christofer Teguh Widyaputra</p>
                            </div>
                          </div>
                        </div>

                        
                      </div>
                      <div class="row">
                        
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Perlengkapan & Humas</p>
                            </div>
                            <img class="card-img-top" src="img/profil/efrond.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Efron Dannari Tandilese</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Perlengkapan & Humas</p>
                            </div>
                            <img class="card-img-top" src="img/profil/IMG-20191119-WA0024.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Triharto Daniel Palamba'</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Perlengkapan & Humas</p>
                            </div>
                            <img class="card-img-top" src="img/profil/zorrenk.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Erwin Uddu</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Koordinator <br> Bidang Dokumentasi</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/IMG_3853-2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Aprianto Victorya</p>
            </div>
             <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar-anggota-dokumentasi">
                Daftar Anggota
              </button>
              <!-- Modal Sie Kesekretariatan-->
              <div class="modal fade" id="daftar-anggota-dokumentasi" tabindex="-1" role="dialog" aria-labelledby="daftar-anggota-dokumentasiLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="daftar-anggota-dokumentasiLabel">Daftar Anggota</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dokumentasi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/agung.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Satria Agung Mahendra</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dokumentasi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/semuel.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Semuel</p>
                            </div>
                          </div>
                        </div>
                     <!--  </div>

                      <div class="row"> -->
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dokumentasi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/FB_IMG_15745283874484997.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Alfan Risno Palondan</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Dokumentasi</p>
                            </div>
                            <img class="card-img-top" src="img/profil/deski.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Deski Tangdiombo</p>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- keamanan -->
        <div class="container">
          <div class="row justify-content-md-center">

       <!-- <div class="col-md-12"> -->
          <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-header">
              <p class="card-text">Koordinator Bidang Keamanan</p>
            </div>
            <img class="card-img-top" src="img/profil/koordinator/febrian.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Febrian Fausan Lebang</p>
            </div>
             <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar-anggota">
                Daftar Anggota
              </button>
              <!-- Modal Sie Kesekretariatan -->
              <div class="modal fade" id="daftar-anggota" tabindex="-1" role="dialog" aria-labelledby="daftar-anggotaLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="daftar-anggotaLabel">Daftar Anggota</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Keamanan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/dellu.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Andre Lee Adi Kaseng</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Keamanan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/yogigs.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Yogi Gumi Simak</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md mb-4">
                          <div class="card">
                            <div class="card-header">
                              <p class="card-text">Anggota Keamanan</p>
                            </div>
                            <img class="card-img-top" src="img/profil/destoy.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Desto Yanto</p>
                            </div>
                          </div>
                        </div>

                      </div>

                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
       </div>


      </div>
        </div>
    </div>
  </section>

  <!-- kontak -->
  <section class="contact mt-5" id="hubungi">
    <div class="container-fluid text-center">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-3">Hubungi Kami</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-sm-1 col-2">
          <a href="mailto: arfinmanipoting@gmail.com" target="_blank">
            <img src="img/001-gmail.png" alt="" class="img-fluid">
          </a>
        </div>
        <div class="col-sm-1 col-2">
          <a href="https://www.facebook.com/arfiind" target="_blank">
            <img src="img/002-facebook.png" alt="" class="img-fluid">
          </a>
        </div>
        <div class="col-sm-1 col-2">
          <a href="https://www.instagram.com/arfin.mp" target="_blank">
            <img src="img/003-instagram.png" alt="" class="img-fluid">
          </a>
        </div>
        <div class="col-sm-1 col-2">
          <a href="whatsapp://send?text=&phone=+62085146401838" target="_blank">
            <img src="img/005-whatsapp.png" alt="" class="img-fluid">
          </a>
        </div>
      </div>
    </div>

</section>


    </div>
    <!-- akhir container -->

      <!-- footer -->
  
  </section>
  <footer class="bg-dark text-white mt-5">
    <div class="container">
      <div class="row">
        <div class="col text-center mt-3 mb-1">
          <p>Copyright &copy; 2019</p>
        </div>
      </div>
    </div>
  </footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>