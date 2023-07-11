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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="path/to/jquery.min.js"></script>
  <script src="path/to/bootstrap.min.js"></script>


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
                <a class="nav-link active" aria-current="page" href="index.php">BERANDA</a>
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
        <div class="container ">
            <div class="row">
                <div class="col-md-6">    <!-- my auto agar tulisan di tengah tengah si container -->
                
                <!-- container -->
                <div class="container position-absolute top-50 start-50 translate-middle">
                    <div class="card">
                        <div class="card-header">
                            Riwayat Absensi Siswa
                        </div>
                    <div class="card-body">


                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nis</th>
                                <th>Kelas</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                            
                            
                            <?php
                                // persiapan menampilkan data atau Read
                                $no = 1;
                                $tampil = mysqli_query($mysqli, "SELECT * FROM tmhs ORDER BY id DESC");
                                while ($data = mysqli_fetch_array($tampil)) :
                            ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['nis']  ?></td>
                                <td><?= $data['kelas'] ?></td>
                                <td><?= $data['keterangan'] ?></td>
                                <td>
                                    <a href="#" class="btn  btn-outline-success">edit</a>
                                    <a href="#" class="btn btn-outline-success">hapus</a>
                                </td>
                            </tr>

                            <?php endwhile; ?>
                        </table>
                       






                    </div>
                    </div>
                </div>
            <!-- end container -->

            </div>
        </div>
            <img src="Assets/Accsent 1.png" alt="" class="accsent-img h-100 position-absolute end-0 bottom-0 top-0 start-0">
        </div>


    </section>
    <!-- end hero section -->

   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>