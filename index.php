<?php  
	session_start();
	require_once ('includes/init.php');
	require_once ('includes/user.php');
	$user = new User();
	$uid = $_SESSION['uid'];
	if (!$user->get_session()){
	header("location:login.php");
	exit();
	}
	if (isset($_GET['q'])){
	$user->user_logout();
	header("location:login.php");
	exit();
	}
?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        .fas, .far{
            color: #78C2AD;
        }
        .icons {
            text-align: center;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" dir="rtl">
          <a class="navbar-brand" href="#">סעידה בפארק</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="text-right dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
          </div>
        </nav>
    <main>
        <div class="mt-3 container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icons">
                        <a href="shifts.php"><i class="far fa-calendar-alt fa-3x"></i></a>
                        <h2 class="mt-2 mb-2 text-center">הגשת משמרות</h2>
                        <p class="text-center">כאן תוכלו להגיש משמרות בלה בלה בלה</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icons">
                        <a href="leadBoard.php"><i class="fas fa-trophy fa-3x"></i></a>
                        <h2 class="mt-2 mb-2 text-center">טבלת מובילים</h2>
                        <p class="text-center">כאן תוכלו לצפות בטבלת מובילים</p>    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icons">
                        <a href="myShifts.php"><i class="far fa-calendar-check fa-3x"></i></a>
                        <h2 class="mt-2 mb-2 text-center">המשמרות שלי</h2>
                        <p class="text-center">כאן תוכלו לצפות במשמרות שלכם</p>    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="icons">
                        <a href="giftsDB.php"><i class="fas fa-gift fa-3x"></i></a>
                        <h2 class="mt-2 mb-2 text-center">מאגר מתנות</h2>
                        <p class="text-center">כאן תוכלו לצפות במאגר המתנות ולבחור מתנה תמורת נקודות</p>    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icons">
                        <a href="employees/"><i class="far fas fa-users-cog fa-3x"></i></a>
                        <h2 class="mt-2 mb-2 text-center">טבלת עובדים</h2>
                        <p class="text-center">כאן תוכלו לצפות בטבלת העובדים</p>    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icons">
                        <a href="reports.php"><i class="fas fa-clipboard-list fa-3x"></i></a>
                        <h2 class="mt-2 mb-2 text-center">סיכומי משמרת</h2>
                        <p class="text-center">כאן תוכלו לצפות בסיכומי משמרת</p>
                    </div>
                </div>
            </div>
        </div>
      </main>
    <p>Hello, <?php $user->get_fullname($uid); ?></p>
    <a href="index.php?q=logout">Logout</a>
    <div id="demo"></div><button onclick="getLocation()">Try It</button><br><br><br>
    <script>
    function getLocation() {
      navigator.geolocation.getCurrentPosition(
                function(position) {
                    var latLngA = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                    var latLngB = new google.maps.LatLng(40.778721618334295, -73.96648406982422);
                    var distance = google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
                    alert(distance);//In metres
                },
                function() {
                    alert("geolocation not supported!!");
                }
        );
    }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMRW5-vQwjDlbxsRTJGPR8DO8cRkkmBJY"></script>
  </body>
</html>