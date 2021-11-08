<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">

  <!-- Own Stylesheet -->
  <link rel="stylesheet" href="style/style.php" media="screen">

  <title>Webshop | Profile</title>
</head>

<body>

    <div class="container-fluid">
    <div class="row">
            <div class="col-sm-12">
                <h2 class="title" href="..index.php">The Gallery</h2>
            </div>
        </div>
      <div class="row">
            <div class="col-sm-2 firstCol">
                <p class="nav-link navBar" aria-current="page"><a href="products.php">Products</a></p>
            </div>
            <?php if (isset($_SESSION['username'])) : ?>
            <div class="col-sm-2">
                <p class="nav-link navBar" aria-current="page"><a href="profile.php">Profile</a></p>
            </div>
            <div class="col-sm-2">
            <p class="nav-link navBar" aria-current="page"><a href="products.php?logout='1'">Logout</a></p>
            </div>
            <div class="col-sm-2">
            <p class="nav-link navBar" aria-current="page"><a href="donations.php">Donations</a></p>
            </div>
            <?php else : ?>
            <div class="col-sm-2">
                <p class="nav-link navBar" aria-current="page"><a href="login.php">Login</a></p>
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

  <div class="container">
    <div class="row pt-5">
      <div class="col-2"></div>
      <div class="col-8">

        <?php if (isset($_SESSION['success'])) : ?>

          <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
          </h3>

        <?php endif ?>


        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
          <h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>

           <?php require "../controller/db-mysql/connect.php";

          $records = mysqli_query($db, "SELECT id, email FROM users WHERE username='$_SESSION[username]'");

          while ($data = mysqli_fetch_array($records)) {
            echo "username: <strong>" . $_SESSION['username'] . "</strong> </br>";
            echo "email: <strong>" . $data['email'] . "</strong> </br>";
          } ?>
        <?php endif ?>
      </div>
    </div>
    <div class="col-2"></div>
  </div>

  <footer class="">
    <div class="footer-copyright text-center py-3 bg-light">© 2021 Copyright:
      <a href="../index.php">Modul151 Ronja Koch</a>
    </div>
  </footer>

</body>

</html>