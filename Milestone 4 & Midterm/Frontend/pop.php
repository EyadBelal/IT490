<!DOCTYPE html>
<html lang="en">
<head>
  <title>JATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

.carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }


/* project logo name */
.projectlogo {
  text-transform: uppercase;
  background: linear-gradient(to right, #ea563c 0%, #c23142 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 20vw;
  font-family: 'Poppins', sans-serif;
  };

/* use for form margin or blank space in left and right */
.form-horizontal .form-group {
    margin-right: 0px;
    margin-left: 0px;
}

.form-control {
    border-radius: 50px;
    width: 90%;
  }

.body-topBottom-margin{
  margin-top: 10px;
  margin-bottom: 50px;

}

.formbody{
  padding:0px; border-radius: 10px; background-color: white;
}


  </style>
</head>
<body>

<!--<nav class="navbar navbar-inverse">-->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="main.php">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
<p class="projectlogo" align="center" style="font-size: 40px;"> <span style="font-size: 35px;"></span>Popular Movies</p>


<div class="container text-center">    
<h3>Check out our popular picks for the movies</h3><br>    
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
              <a href="Pics/morbius.jpg">
                <img src="Pics/morbius.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>Morbius</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="Pics/batman.jpg">
                <img src="Pics/batman.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>The Batman</p>
                </div>
              </a>
            </div>
	  </div>
<div class="col-md-4">
            <div class="thumbnail">
              <a href="Pics/lostCity.jpg">
                <img src="Pics/lostCity.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>The Lost City</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="Pics/the earth.jpeg">
                <img src="Pics/the earth.jpeg" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>The Earth</p>
                </div>
              </a>
            </div>
          </div>
<div class="col-md-4">
            <div class="thumbnail">
              <a href="Pics/deceived.jpeg">
                <img src="Pics/deceived.jpeg" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>Deceived</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="Pics/diveEnd.jpeg">
                <img src="Pics/diveEnd.jpeg" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>Dive Hend</p>
                </div>
              </a>
            </div>
          </div>
        </div>
</body>
</html>


