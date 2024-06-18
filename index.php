<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>HOME of Street Wagon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=League+Spartan:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleee.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <!-- <img src="logo1.png" width="100" height="50"> -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <img src="SW_icon_tp.png" class="pull-left" style="width:5%;" alt="Logo">
        <li><a href="index.php">Street Wagon</a></li>
        <li class="active"><a href="index.php">HOME</a></li>
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
                <a href="https://github.com/MouriCok/street-wagon.git" class="btn btn-primary btn-lg">
                  Download
                </a>
            </div>
            <div class="col-sm-3">
                <img src="240-320_SW-portrait.png" class="pull-right no-shadow" style="width:130%; margin-top:50px;" alt="Logo">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <a href=""><img src="futsal.jpg" class="img-responsive" style="width:500px; height:250px;" alt="Real-Time Tracking"></a>
    </div>
    <div class="col-sm-3"> 
      <a href=""><img src="badminton.jpg" class="img-responsive" style="width:500px; height:250px;" alt="User-Friendly Interface"></a>
    </div>
    <div class="col-sm-3"> 
      <a href=""><img src="tennis.jpg" class="img-responsive" style="width:500px; height:250px;" alt="Personalized Experience"></a>
    </div>
    <div class="col-sm-3">
      <a href=""><img src="squash.jpg" class="img-responsive" style="width:500px; height:250px;" alt="Detailed Information"></a>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
    // Smooth scroll to the facility section when clicking the FACILITY button
        $(".facility-btn").click(function() {
            $('html, body').animate({
                scrollTop: $(".container-fluid.bg-3").offset().top
            }, 1000);
        });
    });
</script>

</body>
</html>
