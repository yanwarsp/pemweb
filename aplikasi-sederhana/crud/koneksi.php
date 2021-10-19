<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "aplikasi-sederhana";

// membuat koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDatabase);

// cek koneksi
if (!$conn) {
  die("koneksi gagal: ") . mysqli_connect_error();
}
