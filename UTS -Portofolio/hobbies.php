<?php
include "koneksi.php";

//ambil data table hobbies
$strSQL = "SELECT * FROM hobbies";
$data = [];
$execStrSQL = mysqli_query($conn, $strSQL);
if (mysqli_num_rows($execStrSQL) > 0) {
  while ($row = mysqli_fetch_assoc($execStrSQL)) {
    $data[] = $row;
  }
}
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

  <title>Hobbies - Yanwar Slamet</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav bordermenu">
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="skills.php">&nbsp;&nbsp;&nbsp;&nbsp;Skills&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="projects.php">&nbsp;&nbsp;Projects&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center menucolor align-items-center">
            <a class="nav-link text-light active" aria-current="page" href="hobbies.php">&nbsp;Hobbies&nbsp;</a>
          </li>
          <li class="nav-item rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="about.php">&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- content -->
  <div class="container text-center text-light">
    <div class="row my-5 pb-2">

      <h4>Musics</h4>
      <div class="col-sm-12 my-2 mb-2 mx-auto">
        <div class="card fonttext roundedcard">
          <div class="card-body">
            <h5 class="card-title"><?= $data[0]['name']; ?></h5>
            <p class="card-text justifytext"><?= $data[0]['description']; ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-2 mb-2 mx-auto">
        <div class="card fonttext roundedcard">
          <img src="<?= $data[1]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
          <div class="card-body">
            <h5 class="card-title"><?= $data[1]['name']; ?></h5>
            <p class="card-text justifytext"><?= $data[1]['description']; ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-2 mb-2 mx-auto">
        <div class="card fonttext roundedcard">
          <img src="<?= $data[2]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
          <div class="card-body">
            <h5 class="card-title"><?= $data[2]['name']; ?></h5>
            <p class="card-text justifytext"><?= $data[2]['description']; ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 my-2 mb-2 mx-auto">
        <div class="card fonttext roundedcard">
          <img src="<?= $data[3]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
          <div class="card-body">
            <h5 class="card-title"><?= $data[3]['name']; ?></h5>
            <p class="card-text justifytext"><?= $data[3]['description']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-5 pb-2">
      <h4>Traveling</h4>
      <div class="col-sm-4 my-2 mb-2 mx-auto">
        <div class="card fonttext roundedcard">
          <img src="<?= $data[4]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
        </div>
      </div>
      <div class="col-sm-4 my-2 mb-2 mx-auto">
        <div class="card fonttext roundedcard">
          <img src="<?= $data[5]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
        </div>
      </div>
      <div class="col-sm-4 my-2 mb-2 mx-auto">
        <div class="card fonttext roundedcard">
          <img src="<?= $data[6]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
        </div>
      </div>
      <div class="row my-5 pb-2">
        <h4> Favourite Games</h4>
        <div class="col-sm-4 my-2 mb-2 mx-auto">
          <div class="card fonttext roundedcard">
            <div class="card-body">
              <h5 class="card-title"><?= $data[7]['name']; ?></h5>
              <img src="<?= $data[7]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-2 mb-2 mx-auto">
          <div class="card fonttext roundedcard">
            <div class="card-body">
              <h5 class="card-title"><?= $data[8]['name']; ?></h5>
              <img src="<?= $data[8]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-2 mb-2 mx-auto">
          <div class="card fonttext roundedcard">
            <div class="card-body">
              <h5 class="card-title"><?= $data[9]['name']; ?></h5>
              <img src="<?= $data[9]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
            </div>
          </div>
        </div>
        <div class="col-sm-6 my-2 mb-2 mx-auto">
          <div class="card fonttext roundedcard">
            <div class="card-body">
              <h5 class="card-title"><?= $data[10]['name']; ?></h5>
              <img src="<?= $data[10]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
            </div>
          </div>
        </div>
        <div class="col-sm-6 my-2 mb-2 mx-auto">
          <div class="card fonttext roundedcard">
            <div class="card-body">
              <h5 class="card-title"><?= $data[11]['name']; ?></h5>
              <img src="<?= $data[11]['image']; ?>" class="card-img-top" alt="..." width="250px" height="250px">
            </div>
          </div>
        </div>
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