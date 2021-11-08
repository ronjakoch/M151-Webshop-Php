<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  // header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  // header("location: login.php");
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">

  <!-- Own Stylesheet -->
  <link rel="stylesheet" href="view/style/style.php" media="screen">

  <title>Webshop | Home</title>
</head>

<body>

<div class="container-fluid">
    <div class="row">
            <div class="col-sm-12">
                <h2 class="title" href="index.php">The Gallery</h2>
            </div>
        </div>
      <div class="row">
            <div class="col-sm-2 firstCol">
                <p class="nav-link navBar" aria-current="page"><a href="view/products.php">Products</a></p>
            </div>
            <?php if (isset($_SESSION['username'])) : ?>
            <div class="col-sm-2">
                <p class="nav-link navBar" aria-current="page"><a href="view/profile.php">Profile</a></p>
            </div>
            <div class="col-sm-2">
            <p class="nav-link navBar" aria-current="page"><a href="view/products.php?logout='1'">Logout</a></p>
            </div>
            <?php else : ?>
            <div class="col-sm-2">
                <p class="nav-link navBar" aria-current="page"><a href="view/login.php">Login</a></p>
            </div>
            <?php endif; ?>
      </div>
      <div class="row">
            <div class="col-sm-5">
                <hr>
                </hr>
            </div>
            <div class="col-sm-2">
                <p class="titleBox">UR ART DEALER</p>
            </div>
            <div class="col-sm-5">
                <hr>
                </hr>
            </div>
        </div>
    </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox" height="20px" width="auto">
    <div class="item active">
      <img src="view/img/carousel/car1.png" alt="Henri Matisse" height="20px" width="auto">
      <div class="carousel-caption">
        <h3>Henri Matisse</h3>
        <p>Harmony in red</p>
      </div>
    </div>

    <div class="item">
      <img src="view/img/carousel/car3.png" alt="Adebayo Bolaij" height="20px" width="auto">
      <div class="carousel-caption">
        <h3>Adebayo Bolaij</h3>
        <p>The power & the pause</p>
      </div>
    </div>

    <div class="item">
      <img src="view/img/carousel/car2.png" alt="Harald Nägeli" height="20px" width="auto">
      <div class="carousel-caption">
        <h3>Harald Nägeli</h3>
        <p>Totentanz</p>
      </div>
    </div>

    <div class="item">
      <img src="view/img/carousel/car4.png" alt="Banksy" height="20px" width="auto">
      <div class="carousel-caption">
        <h3>Banksy</h3>
        <p>Papuce gege Nazis</p>
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<footer class="">
<div class="footer-copyright text-center py-3 bg-light">© 2021 Copyright:
  <a href="index.php">Modul151 Ronja Koch</a>
</div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>