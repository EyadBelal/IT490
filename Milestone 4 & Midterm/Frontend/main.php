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
      <a class="navbar-brand" href="pop.php">POPULAR</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
       <!-- <li><a href="registration.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>-->
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li><br><br><br><br>
      </ul>
    </div>
	<div class="topnov">
	<input type="text" placeholder="Search..">
	<input type="submit" value="Submit">
        </div>
  </div>
</nav>
<div class="container text-center">
<p class="projectlogo" align="center" style="font-size: 50px;"> <span style="font-size: 35px;"></span>Welcome To Jate</p><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="Pics/Doctor.jpeg" alt="Image">
      <div class="carousel-caption">
        <h3>Doctor Strange</h3>
        <p>Multiverse Of Madness</p>
      </div>      
    </div>

    <div class="item">
      <img src="Pics/TheBatman.jpeg" alt="Image">
      <div class="carousel-caption">
        <h3>The Batman</h3>
        <p>STREAM On HBOmax</p>
      </div>      
    </div>
    <div class="item">
      <img src="Pics/north.jpeg" alt="Image">
      <div class="carousel-caption">
        <h3>The Northman</h3>
        <p></p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br><br><br><br><br>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<div class="container text-center">    
<!--<p class="projectlogo" align="center" style="font-size: 60px;"> <span style="font-size: 35px;"></span>Welcome To Jate</p>-->
<p class="projectlogo" align="center" style="font-size: 25px;"> <span style="font-size: 35px;"></span>Trending movies</p><br><br>
<div class="row">
    <div class="col-md-4">
        <div class="thumbnail">
          <a href="https://youtu.be/JfVOs4VSpmA">
            <img src="Pics/spiderman.jpeg" alt="Lights" style="width:100%">
          </a>
	</div>
	   <div class="column" align="center">
		<p style="font-size: 15px;">Spider-Man</p>
			<div class="rateyo" id= "rating"
                        data-rateyo-rating="0"
                        data-rateyo-num-stars="5"
			data-rateyo-score="3">
                     </div>
                <span class='result'></span>
		<input type="hidden" name="rating">
	   </div>
	<input type="text" id="input" placeholder="write your text..">
        <button type="button" name="button" id="comment">comment</button>
      </div>
	<div class="col-md-4">
        <div class="thumbnail">
          <a href="https://youtu.be/beToTslH17s">
            <img src="Pics/scream.jpeg" alt="Lights" style="width:100%">
          </a>
	</div>
		<div class="column" align="center">
                <p style="font-size: 15px;">Scream</p>
                        <div class="rateyo" id= "rating"
                        data-rateyo-rating="0"
                        data-rateyo-num-stars="5"
                        data-rateyo-score="3">
                     </div>
                <span class='result'></span>
                <input type="hidden" name="rating">
	   </div>
	<input type="text" id="input" placeholder="write your text..">
        <button type="button" name"button" id="comment">comment</button>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="https://youtu.be/9ix7TUGVYIo">
            <img src="Pics/matrix.jpeg" alt="Lights" style="width:100%">
          </a>
	</div>
	      <div class="column" align="center">
                <p style="font-size: 15px;">Matrix</p>
                        <div class="rateyo" id= "rating"
                        data-rateyo-rating="0"
                        data-rateyo-num-stars="5"
                        data-rateyo-score="3">
                     </div>
                <span class='result'></span>
                <input type="hidden" name="rating">
	   </div>
	<input type="text" id="input" placeholder="write your text..">
        <button type="button" name"button" id="comment">comment</button><br><br><br><br><br>
      </div>
	<div class="col-md-4">
            <div class="thumbnail">
              <a href="https://youtu.be/mqqft2x_Aa4">
                <img src="Pics/batman.jpg" alt="Lights" style="width:100%">
              </a>
         </div>
           <div class="column" align="center">
                <p style="font-size: 15px;">Batman</p>
                        <div class="rateyo" id= "rating"
                        data-rateyo-rating="0"
                        data-rateyo-num-stars="5"
                        data-rateyo-score="3">
                     </div>
                <span class='result'></span>
                <input type="hidden" name="rating">
	   </div>
	<input type="text" id="input" placeholder="write your text..">
        <button type="button" name"button" id="comment">comment</button>
	</div>
	<div class="col-md-4">
            <div class="thumbnail">
              <a href="https://youtu.be/oZ6iiRrz1SY">
                <img src="Pics/morbius.jpg" alt="Lights" style="width:100%">
                </a>
         </div>
           <div class="column" align="center">
                <p style="font-size: 15px;">Morbius</p>
                        <div class="rateyo" id= "rating"
                        data-rateyo-rating="0"
                        data-rateyo-num-stars="5"
                        data-rateyo-score="3">
                     </div>
                <span class='result'></span>
                <input type="hidden" name="rating">
	   </div>
	<input type="text" id="input" placeholder="write your text..">
        <button type="button" name"button" id="comment">comment</button>
	</div>
	<div class="col-md-4">
            <div class="thumbnail">
              <a href="https://youtu.be/eHp3MbsCbMg">
                <img src="Pics/uncharted.jpeg" alt="Lights" style="width:100%">
                </a>
         </div>
           <div class="column" align="center">
                <p style="font-size: 15px;">Uncharted</p>
                        <div class="rateyo" id= "rating"
                        data-rateyo-rating="0"
                        data-rateyo-num-stars="5"
                        data-rateyo-score="3">
                     </div>
                <span class='result'></span>
                <input type="hidden" name="rating">
	   </div>
	<input type="text" id="input" placeholder="write your text..">
        <button type="button" name"button" id="comment">comment</button>
	</div>
    </div>
   <!--<div class="col-sm-4">
    <div class="well">
     <p>Some text..</p>
    </div>
    <div class="well">
     <p>Some text..</p>
    </div>
  </div>-->
</div>
</div><br><br><br><br>

        </div>
      <!-- <div class="col-sm-4">
        <div class="well">
         <p>Some text..</p>
        </div>
        <div class="well">
         <p>Some text..</p>
        </div>
      </div> -->
    </div>
    </div><br><br><br><br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
		var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
<footer class="container-fluid text-center" style="bottom: 0px; position: fixed; width: 100%; margin-top: 20px;">
  <p>All copyright reserved By JATE</p>
</footer>
</body>
</html>

<?php
require '/var/www/html/Jate/db/dbStar.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $rating = $_POST["rating"];

    $sql = "INSERT INTO ratee (name,rate) VALUES ('$name','$rating')";
    if (mysqli_query($conn, $sql))
    {
        echo "New Rate addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
