<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Pendaftaran Mahasiswa Baru</title>

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
            <a class="nav-link text-dark active" aria-current="page" href="pmb.php">PENDAFTARAN</a>
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
  <div class="container">
    <form action="konfirmasipmb.php" method="POST">

      <h4 class="text-center mt-4 mb-3">Pendaftaran Online</h4>
      <div class="form-group row my-2">
        <label for="jalurpmb" class="col-sm-6 col-form-label">Jalur Penerimaan Mahasiswa Baru </label>
        <div class="col-sm-6">
          <select id="jalurpmb" class="form-control" name="jalurpmb" required>
            <option selected>Pilih Jalur Penerimaan</option>
            <option value="Jalur Regular">Jalur Regular</option>
            <option value="Jalur Bidikmisi">Jalur Bidikmisi</option>
            <option value="Jalur Beasiswa Peringkat Raport">Jalur Beasiswa Peringkat Raport</option>
            <option value="Jalur Beasiswa Ujian Saringan Masuk">Jalur Beasiswa Ujian Saringan Masuk</option>
            <option value="Jalur Beasiswa ASAK">Jalur Beasiswa ASAK</option>
            <option value="Jalur Beasiswa Lulusan Terbaik Sekolah">Jalur Beasiswa Lulusan Terbaik Sekolah</option>
            <option value="Jalur Beasiswa Prestasi Akademik dan Non Akademik">Jalur Beasiswa Prestasi Akademik dan Non Akademik</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="namacalonmhs" class="col-sm-6 col-form-label">Nama Calon Mahasiswa (sesuai ijazah SMA) </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="namacalonmhs" name="namacalonmhs" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="ttl" class="col-sm-6 col-form-label">Tempat / Tanggal Lahir </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="ttl" name="ttl" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="jeniskelamin" class="col-sm-6 col-form-label">Jenis Kelamin </label>
        <div class="col-sm-6">
          <select id="jeniskelamin" class="form-control" name="jeniskelamin" required>
            <option selected>Pilih</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="agama" class="col-sm-6 col-form-label">Agama </label>
        <div class="col-sm-6">
          <select id="agama" class="form-control" name="agama" required>
            <option selected>Pilih</option>
            <option value="Islam">Islam</option>
            <option value="Katolik">Katolik</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="status" class="col-sm-6 col-form-label">Status </label>
        <div class="col-sm-6">
          <select id="status" class="form-control" name="status" required>
            <option selected>Pilih</option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Janda">Janda</option>
            <option value="Duda">Duda</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="alamat" class="col-sm-6 col-form-label">Alamat </label>
        <div class="col-sm-6">
          <textarea class="form-control" rows="3" id="alamat" name="alamat" required></textarea>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="kodepos" class="col-sm-6 col-form-label">Kode Pos </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="kodepos" name="kodepos" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="nohp" class="col-sm-6 col-form-label">No Handphone </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="nohp" name="nohp" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="email" class="col-sm-6 col-form-label">Email</label>
        <div class="col-sm-6">
          <input class="form-control" type="email" id="email" name="email" required>
        </div>
      </div>
      <hr>
      <h5 class="text-center mt-4 mb-3">DATA SEKOLAH ASAL CALON MAHASISWA</h5>
      <div class="form-group row my-2">
        <label for="sekolah" class="col-sm-6 col-form-label">Asal Sekolah </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="sekolah" name="sekolah" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="lulus" class="col-sm-6 col-form-label">Tahun Lulus </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="lulus" name="lulus" required>
        </div>
      </div>
      <hr>
      <h5 class="text-center mt-4 mb-3">DATA ORANG TUA CALON MAHASISWA</h5>
      <div class="form-group row my-2">
        <label for="ayah" class="col-sm-6 col-form-label">Nama Ayah </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="ayah" name="ayah" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="ibu" class="col-sm-6 col-form-label">Nama Ibu </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="ibu" name="ibu" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="alamatortu" class="col-sm-6 col-form-label">Alamat </label>
        <div class="col-sm-6">
          <textarea class="form-control" rows="3" id="alamatortu" name="alamatortu" required></textarea>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="hportu" class="col-sm-6 col-form-label">No Handphone </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="hportu" name="hportu" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="pendAyah" class="col-sm-6 col-form-label">Pendidikan Terakhir Ayah </label>
        <div class="col-sm-6">
          <select id="pendAyah" class="form-control" name="pendAyah" required>
            <option selected>Pilih</option>
            <option value="Tidak Tamat SD">A - Tidak Tamat SD</option>
            <option value="Tamat SD">B - Tamat SD</option>
            <option value="Tamat SMP">C - Tamat SMP</option>
            <option value="Tamat SMA">D - Tamat SMA</option>
            <option value="Diploma (D1 - D2)">E - Diploma (D1 - D2)</option>
            <option value="Sarjana (D3)">F - Sarjana (D3)</option>
            <option value="Sarjana (D4 - S1)">G - Sarjana (D4 - S1)</option>
            <option value="Pascasarjana (S2)">H - Pascasarjana (S2)</option>
            <option value="Doktor (S3)">I - Doktor (S3)</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="pendIbu" class="col-sm-6 col-form-label">Pendidikan Terakhir Ibu </label>
        <div class="col-sm-6">
          <select id="pendIbu" class="form-control" name="pendIbu" required>
            <option selected>Pilih</option>
            <option value="Tidak Tamat SD">A - Tidak Tamat SD</option>
            <option value="Tamat SD">B - Tamat SD</option>
            <option value="Tamat SMP">C - Tamat SMP</option>
            <option value="Tamat SMA">D - Tamat SMA</option>
            <option value="Diploma (D1 - D2)">E - Diploma (D1 - D2)</option>
            <option value="Sarjana (D3)">F - Sarjana (D3)</option>
            <option value="Sarjana (D4 - S1)">G - Sarjana (D4 - S1)</option>
            <option value="Pascasarjana (S2)">H - Pascasarjana (S2)</option>
            <option value="Doktor (S3)">I - Doktor (S3)</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="statAyah" class="col-sm-6 col-form-label">Status Ayah</label>
        <div class="col-sm-6">
          <select id="statAyah" class="form-control" name="statAyah" required>
            <option selected>Pilih</option>
            <option value="Masih Hidup">Masih Hidup</option>
            <option value="Sudah Meninggal">Sudah Meninggal</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="statIbu" class="col-sm-6 col-form-label">Status Ibu</label>
        <div class="col-sm-6">
          <select id="statIbu" class="form-control" name="statIbu" required>
            <option selected>Pilih</option>
            <option value="Masih Hidup">Masih Hidup</option>
            <option value="Sudah Meninggal">Sudah Meninggal</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="pkrjAyah" class="col-sm-6 col-form-label">Pekerjaan Ayah </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="pkrjAyah" name="pkrjAyah" required>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="pkrjIbu" class="col-sm-6 col-form-label">Pekerjaan Ibu </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="pkrjIbu" name="pkrjIbu" required>
        </div>
      </div>
      <hr>
      <h5 class="text-center mt-4 mb-3">PEMINATAN PROGRAM STUDI</h5>
      <div class="form-group row my-2">
        <label for="prodi1" class="col-sm-6 col-form-label">Pilihan Program Studi 1</label>
        <div class="col-sm-6">
          <select id="prodi1" class="form-control" name="prodi1">
            <option selected>Pilih</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Desain Produk">Desain Produk</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Arsitektur">Arsitektur</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label for="prodi2" class="col-sm-6 col-form-label">Pilihan Program Studi 2</label>
        <div class="col-sm-6">
          <select id="prodi2" class="form-control" name="prodi2">
            <option selected>Pilih</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Desain Produk">Desain Produk</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Arsitektur">Arsitektur</option>
          </select>
        </div>
      </div>
      <div class="form-group row my-2">
        <label class="col-sm-6 col-form-label">Sumber Informasi </label>
        <div class="col-sm-6">
          <input type="radio" id="internet" value="Internet" name="info">
          <label for="internet">Internet</label><br>
          <input type="radio" id="majalah" value="Majalah" name="info">
          <label for="majalah">Majalah</label><br>
          <input type="radio" id="brosur" value="Brosur" name="info">
          <label for="brosur">Brosur</label><br>
          <input type="radio" id="radio" value="Radio" name="info">
          <label for="radio">Radio</label><br>
          <input type="radio" id="spanduk" value="Spanduk" name="info">
          <label for="spanduk">Spanduk</label><br>
          <input type="radio" id="orangtua" value="Orang Tua" name="info">
          <label for="orangtua">Orang Tua</label><br>
          <input type="radio" id="teman" value="Teman" name="info">
          <label for="teman">Teman</label><br>
          <input type="radio" id="pameran" value="Pameran" name="info">
          <label for="pameran">Pameran</label><br>
          <input type="radio" id="pihaksekolah" value="Pihak Sekolah" name="info">
          <label for="pihaksekolah">Pihak Sekolah</label><br>
          <input type="radio" id="lainlain" value="Lainnya" name="info">
          <label for="lainlain">Lainnya</label>
        </div>
      </div>
      <hr>
      <h5 class="text-center mt-4 mb-3">UJIAN SARINGAN MASUK</h5>
      <div class="form-group row my-2 border border-2 border-dark">
        <h6 class="text-center"> Lokasi : Kampus UPJ - Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413 Banten, Indonesia.</h6>
        <label class="col-sm-6 col-form-label text-center">Pilihan Gelombang </label>
        <div class="col-sm-6">
          <input type="radio" id="gelombang1" value="Gelombang 1" name="gelombang">
          <label for="gelombang1">Gelombang 1</label><br>
          <input type="radio" id="gelombang2" value="Gelombang 2" name="gelombang">
          <label for="gelombang2">Gelombang 2</label><br>
          <input type="radio" id="gelombang3" value="Gelombang 3" name="gelombang">
          <label for="gelombang3">Gelombang 3</label><br>
          <input type="radio" id="gelombang4" value="Gelombang 4" name="gelombang">
          <label for="gelombang4">Gelombang 4</label><br>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col text-center">
          <button type="submit" class="btn btn-warning">Submit</button>
          <button type="reset" class="btn btn-warning">Reset</button>
        </div>
      </div>
    </form>
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