<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Konfirmasi Pendaftaran Mahasiswa Baru</title>

  <style>

  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning border border-2 border-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="" width="78%" height="78%">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link text-dark" href="#">HOME</a>
          </li>
          <li class="nav-item border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link text-dark" href="#">VISI MISI</a>
          </li>
          <li class="nav-item border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link text-dark" href="#">AKADEMIK</a>
          </li>
          <li class="nav-item dropdown border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PROGRAM STUDI
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-dark" href="#">Akuntansi</a></li>
              <li><a class="dropdown-item text-dark" href="#">Manajemen</a></li>
              <li><a class="dropdown-item text-dark" href="#">Psikologi</a></li>
              <li><a class="dropdown-item text-dark" href="#">Ilmu Komunikasi</a></li>
              <li><a class="dropdown-item text-dark" href="#">Informatika</a></li>
              <li><a class="dropdown-item text-dark" href="#">Sistem Informasi</a></li>
              <li><a class="dropdown-item text-dark" href="#">Desain Komunikasi Visual</a></li>
              <li><a class="dropdown-item text-dark" href="#">Desain Produk</a></li>
              <li><a class="dropdown-item text-dark" href="#">Teknik Sipil</a></li>
              <li><a class="dropdown-item text-dark" href="#">Arsitektur</a></li>
            </ul>
          </li>
          <li class="nav-item border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link text-dark active" href="pmb.php">PENDAFTARAN</a>
          </li>
          <li class="nav-item border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link text-dark" href="#">PENELITIAN</a>
          </li>
          <li class="nav-item border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link text-dark" href="#">KERJASAMA</a>
          </li>
          <li class="nav-item border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link text-dark" href="#">KARIR</a>
          </li>
          <li class="nav-item border rounded-pill border-2 border-dark mx-1">
            <a class="nav-link text-dark" href="#">TENTANG UPJ</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control rounded-pill border-2 border-dark me-2" type="search" placeholder="" aria-label="Search">
          <button class="btn btn-outline-dark border rounded-pill border-2 border-dark" type="submit">CARI</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- FORM PENDAFTARAN -->
  <div class="container text-center border">
    <h4 class="text-center mt-4 mb-3">Konfirmasi Pendaftaran Online</h4>
    <h5>Jalur Penerima Mahasiswa Baru : <?= $_POST['jalurpmb']; ?></h5>
    <h5>Nama Calon Mahasiswa (sesuai ijazah SMA) : <?= $_POST['namacalonmhs']; ?></h5>
    <h5>Tempat / Tanggal Lahir : <?= $_POST['ttl']; ?></h5>
    <h5>Jenis Kelamin : <?= $_POST['jeniskelamin']; ?></h5>
    <h5>Agama : <?= $_POST['agama']; ?></h5>
    <h5>Status : <?= $_POST['status']; ?></h5>
    <h5>Alamat : <?= $_POST['alamat']; ?></h5>
    <h5>Kode Pos : <?= $_POST['kodepos']; ?></h5>
    <h5>No Handphone : <?= $_POST['nohp']; ?></h5>
    <h5>Email : <?= $_POST['email']; ?></h5>
    <hr>
    <h4 class="text-center mt-4 mb-3">Data Sekolah Asal Calon Mahasiswa</h4>
    <h5>Asal Sekolah : <?= $_POST['sekolah']; ?></h5>
    <h5>Tahun Lulus : <?= $_POST['lulus']; ?></h5>
    <hr>
    <h4 class="text-center mt-4 mb-3">Data Orang Tua Calon Mahasiswa</h4>
    <h5>Nama Ayah : <?= $_POST['ayah']; ?></h5>
    <h5>Nama Ibu : <?= $_POST['ibu']; ?></h5>
    <h5>Alamat : <?= $_POST['alamatortu']; ?></h5>
    <h5>No Handphone : <?= $_POST['hportu']; ?></h5>
    <h5>Pendidikan Terakhir Ayah : <?= $_POST['pendAyah']; ?></h5>
    <h5>Pendidikan Terakhir Ibu : <?= $_POST['pendIbu']; ?></h5>
    <h5>Status Ayah : <?= $_POST['statAyah']; ?></h5>
    <h5>Status Ibu : <?= $_POST['statIbu']; ?></h5>
    <h5>Pekerjaan Ayah : <?= $_POST['pkrjAyah']; ?></h5>
    <h5>Pekerjaan Ibu : <?= $_POST['pkrjIbu']; ?></h5>
    <hr>
    <h4 class="text-center mt-4 mb-3">Peminatan Program Studi</h4>
    <h5>Pilihan Program Studi 1 : <?= $_POST['prodi1']; ?></h5>
    <h5>Pilihan Program Studi 2 : <?= $_POST['prodi2']; ?></h5>
    <h5>Sumber Informasi : <?= $_POST['info']; ?></h5>
    <h5>Pilihan Gelombang USM : <?= $_POST['gelombang']; ?></h5>
  </div>
  <br><br>

  <!-- FOOTER -->
  <footer class="text-center text-lg-start bg-warning text-muted">
    <div class="text-center p-4 text-dark">
      &copy; 2021 Copyright
      <a class="text-reset fw-bold" href="https://github.com/yanwarsp/pemweb">yanwarsp</a>
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>