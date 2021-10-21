<?php
include "koneksi.php";

//ambil database
$strSQL = "SELECT * FROM profil";
$execStrSQL = mysqli_query($conn, $strSQL);
$data = mysqli_fetch_assoc($execStrSQL);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- my CSS -->
  <link rel="stylesheet" href="styles/styles.css">

  <title>Home - Yanwar Slamet</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav bordermenu">
          <li class="nav-item menucolor rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link active text-light" aria-current="page" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="skills.php">&nbsp;&nbsp;&nbsp;&nbsp;Skills&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="projects.php">&nbsp;&nbsp;Projects&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="hobbies.php">&nbsp;Hobbies&nbsp;</a>
          </li>
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="about.php">&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="position-relative overflow-hidden p-3 text-center">
    <div class="col-md-6 p-lg-3 my-2 mx-auto">
      <h1 class="display-4 my-4 font-weight-normal text-light"><?= $data["namadepan"]; ?> Slamet</h1>
      <img class="profileimg col-md-6 mb-1" src="<?= $data["pasfoto"]; ?>" alt="">
      <p class="lead font-weight-normal text-light">
        My name is Yanwar, this site intends <br> to display my portfolio.
      </p>
      <a class="btn btn-outline-light" href="skills.php">Let's Explore</a>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>