<?php
    //panggil koneksi database
include "koneksi.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- boostrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- my css -->
  <link rel="stylesheet" href="style.css">

  <!-- boostrap css -->
  <link rel="stylesheet" href="C:\Users\ASUS\OneDrive\Desktop\CompanyProfile\bootstrap-5.3.0-dist\bootstrap-5.3.0-dist\css/bootstrap.min.css">


  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">  

  <!-- logo title/favicon -->
                <!-- <link rel="icon" href="Assets/logoicon.png" type="image/x-icon"> -->

  <!-- file javascript bootstrap -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="path/to/jquery.min.js"></script>
  <script src="path/to/bootstrap.min.js"></script> -->


  <title>AttendTrackr</title>

</head>
<body id="home">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="assets/logoicon.png" alt="absen" width="30" class="me-1">ttendTrackr </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="riwayat.php">RIWAYAT</a>
              </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    KELAS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">XII RPL 1</a></li>
                        <li><a class="dropdown-item" href="#">XII RPL 2</a></li>
                        <li><a class="dropdown-item" href="#">XII RPL 3</a></li>
                        <!-- <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                </li>

            </ul>
          </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- hero section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">    <!-- my auto agar tulisan di tengah tengah si container -->
                   
                <!-- card -->
                <div class=" shadow p-3 rounded-4 card position-absolute top-3 end-5 translate-middle-y" style="width: 40rem; height:11rem;">
                    <div class="card-body">
                        <h3 class="card-title">Absensi Kelas</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Jangan lupa untuk isi absensi yaa:) </h6>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#modalabsen">
                            absen sekarang
                        </button>
                </div>
                </div>
    
                    <a href="#">
                        <img src="Assets/Right Arrow lg.png" alt="">
                    </a>
                </div>
            </div>

            <img src="Assets/Hero Image.png" alt="" class="img-hero position-absolute end-0 bottom-0 ">
            <img src="Assets/Accsent 1.png" alt="" class="accsent-img h-100 position-absolute end-0 bottom-0 top-0 start-0">
        </div>
                        
        <!-- awal Modal -->
        <div class="modal fade" id="modalabsen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Absen Siswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form method="POST" action="aksi_crud.php">
                    <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nis</label>
                                <input type="text" class="form-control" id="nis" name="nis" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="2"></textarea>
                            </div>

                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success" name="bsimpan">simpan</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">keluar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
                                        
    <!-- end button trigger modal -->
    </section>
    <!-- end hero section -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>