<!DOCTYPE html>
<html lang="en">
<head>
  <title>Namal Food Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/myStyles.css">
  <link rel="stylesheet" href="./css/slider.css">
  <script src="./Javascript/jquery-3.2.1.min.js"></script>
  <script src="./Javascript/bootstrap.min.js"></script>
  <script src="./Javascript/slider.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Namal Food Service</a>
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active buttons"><a href="index.php">Home</a></li>
      <li class="buttons"><a href="Menu.php"><span ></span> Menu</a></li>
      <li><button class="btn btn-danger navbar-btn" onclick="location.href='login.php'">Login</button></li>
    </ul>
  </div>
</nav>

  <div class="ism-slider Box" data-transition_type="fade" data-play_type="loop" data-interval="3000" data-image_fx="zoomrotate" id="my-slider">
    <ol>
      <li>
        <img src="./Images/img (1).jpg">
        <div class="ism-caption ism-caption-0">Samosas</div>
      </li>
      <li>
        <img src="./Images/img (2).jpg">
        <div class="ism-caption ism-caption-0">Hot Biryani</div>
      </li>
      <li>
        <img src="./Images/img (3).jpg">
        <div class="ism-caption ism-caption-0">Leg pieces</div>
      </li>
    </ol>
  </div>
  <div class="Mid">
      <button onclick="location.href='Menu.php'" class="MainButton">Check menu</button>
  </div>

  <footer class="footer">
    Contact us
  </footer>
</body>
</html>
