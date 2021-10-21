<?php
include "koneksi.php";

//ambil data table skills
$strSQL = "SELECT * FROM skills";
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

  <title>SKills - Yanwar Slamet</title>
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
          <li class="nav-item  rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item  rounded-pill menucolor me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link active text-light" aria-current="page" href="skills.php">&nbsp;&nbsp;&nbsp;&nbsp;Skills&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item  rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="projects.php">&nbsp;&nbsp;Projects&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item  rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="hobbies.php">&nbsp;Hobbies&nbsp;</a>
          </li>
          <li class="nav-item  rounded-pill me-3 d-flex justify-content-center align-items-center">
            <a class="nav-link" href="about.php">&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- content -->
  <div class="container text-center text-light font2">
    <!-- programming -->
    <div class="row my-5 pb-2">
      <div class="col-sm-12">
        <h4><?= $data[0]['category']; ?></h4>
        <br>
      </div>
      <div class="col-sm-3 mx-auto hovering">
        <img src="<?= $data[0]['img']; ?>" alt="" width="20%" height="20%" class="skillsimg">
        <h4><?= $data[0]['name']; ?></h4>
        <p class="justifytext"><?= $data[0]['description']; ?></p>
      </div>
      <div class="col-sm-3 mx-auto hovering">
        <img src="<?= $data[1]['img']; ?>" alt="" width="20%" height="20%" class="skillsimg">
        <h4><?= $data[1]['name']; ?></h4>
        <p class="justifytext"><?= $data[1]['description']; ?></p>

      </div>
      <div class="col-sm-3 mx-auto hovering">
        <img src="<?= $data[2]['img']; ?>" alt="" width="20%" height="20%" class="skillsimg">
        <h4><?= $data[2]['name']; ?></h4>
        <p class="justifytext"><?= $data[2]['description']; ?></p>

      </div>

    </div>
    <hr>
    <div class="row my-5 pb-2">
      <div class="col-sm-12">
        <h4><?= $data[3]['category']; ?></h4>
        <br>
      </div>
      <div class="col-sm-3 mx-auto hovering">
        <img src="<?= $data[3]['img']; ?>" alt="" width="20%" height="20%" class="skillsimg">
        <h4><?= $data[3]['name']; ?> </h4>
        <p class="justifytext"><?= $data[3]['description']; ?></p>

      </div>
      <div class="col-sm-3 mx-auto hovering">
        <img src="<?= $data[4]['img']; ?>" alt="" width="20%" height="20%" class="skillsimg">
        <h4><?= $data[4]['name']; ?></h4>
        <p class="justifytext"><?= $data[4]['description']; ?></p>

      </div>
      <div class="col-sm-3 mx-auto hovering">
        <img src="<?= $data[5]['img']; ?>" alt="" width="20%" height="20%" class="skillsimg">
        <h4><?= $data[5]['name']; ?></h4>
        <p class="justifytext"><?= $data[5]['description']; ?></p>

      </div>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->
  <script>
    $(window).scroll(function() {
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 1);
    });
  </script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>