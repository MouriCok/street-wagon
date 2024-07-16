<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>HOME of Street Wagon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=League+Spartan:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/cbf02b9426.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <img src="SW_icon_tp.png" class="pull-left" style="width:5%;" alt="Logo">
        <li><a href="index.php">Street Wagon</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          session_start();
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
              // If user is logged in, show username
              echo '<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> ' . $_SESSION['username'] . '</a></li>';
          } else {
              // If user is not logged in, show login link
              echo '<li class="login"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron bg-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 text-left">
                <span class="p0">Street Wagon</span><br>
                <span class="p1">Find Your Desire Food Truck</span><br>
                <span class="p2">
                  Discover Food Trucks in your vicinity!<br>
                  Whether you're a student on a lunch break,<br>
                  A teenager hanging out with friends, or a street food aficionado.<br>
                  Street Wagon helps you find the best food trucks near you with ease.</span><br><br>
                  <a href="https://github.com/MouriCok/street-wagon.git" class="fa fa-github btn btn-primary btn-lg">
                  GitHub
                  </a>
            </div>
            <div class="col-sm-3">
                <img src="240-320_SW-portrait.png" class="pull-right no-shadow" style="width:130%; margin-top:50px;" alt="Logo">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-3 text-left">    
  <div class="row">
    <div class="col-sm-3">
      <img src="maps_page.png" class="img-responsive" style="width:180px; height:360px; margin-right:36px;" alt="Real-Time Tracking">
    </div>
    <div class="col-sm-8">
      <span class="p3">Real-Time Tracking</span><br><br>
      <span class="p2">Get real-time updates on the location of food trucks around you. With Street Wagon, you can see live updates as food trucks move and settle in different locations. This feature ensures you never miss out on your favorite food trucks, helping you avoid the hassle of wandering around aimlessly. Whether you're craving a specific dish or just exploring, Street Wagon brings the food trucks to your fingertips, making it easier than ever to find delicious street food nearby.</span>
    </div>
  </div><br><br>
  <div class="row">
    <div class="col-sm-3">
      <img src="detail_page.png" class="img-responsive" style="width:180px; height:360px; margin-right:36px;" alt="Detailed Information">
    </div>
    <div class="col-sm-8">
      <span class="p3">Detailed Information</span><br><br>
      <span class="p2">Check out menus, hours of operation, and reviews to make an informed choice about where to eat next. Street Wagon provides comprehensive details about each food truck, including their menu items with prices, operating hours, and customer reviews. This detailed information helps you make informed decisions based on what you're craving, your budget, and other users' experiences. Whether you're trying a new food truck or returning to a favorite, you'll have all the information you need at your fingertips.</span>
    </div>
  </div><br><br>
</div>

<footer class="container-fluid text-center">
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li>
        <h5 >Open-source Apache Licensed</h5>
      </li>
    </ul>
  </div>
</footer>
</body>
</html>
