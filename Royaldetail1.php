 <html>
<title></title>
<head>
   <link href="css/drop.css" rel="stylesheet">
     <script src="js/drop.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<header class="w3-container ">
<div class="topnav" id="myTopnav">
    <div class="header-limiter">
    <img src="Bagan images/royal2.jpg" alt="" height="130" width"100" style="float:left; position:relative;"/>
    <h1 >&nbsp; &nbsp; <span>Royal Bagan <span>Hotel's Details</span></h1>
      <a href="home.html"  class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Destination
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="bagan.html">Bagan</a>
      <a href="mandalay.html">Mandalay</a>
       <a href="beach.html">Beaches</a>
     
    </div>
  </div> 
   <a href="package.php" >Tour Packages</a>
  <div class="dropdown">
    <button class="dropbtn">Hotels
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="baganhotel.php">Hotels in Bagan</a>
      <a href="manhotel.php">Hotels in Mandalay</a>
       <a href="beachhotel.php">Hotels in Beaches</a>
    </div>
  </div>
  <a href="transportation.php">Transportation</a>
  <a href="contact.php">Contact Us</a>
  <ul style="float:right"><a class="active" href="login.php">Admin Login</a></ul>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
 </div></div>
</header>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="css/image.css" rel="stylesheet">
     <script src="js/image.js"></script>
</head>
<body>
  <header class="w3-container">
  <div class="w3-white" id="room">
    <div class="w3-container w3-content w3-padding-100" style="max-width:1000px">
      <h2 class="w3-wide w3-center">Royal Bagan Hotel</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your favourite room!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Location <span class="w3-tag w3-green w3-margin-left">no(1441),Anawyathar road, Bagan-Nyaung Oo Township., Nyaung U, 11101 Bagan, Myanmar</span></li>
        <li class="w3-padding">Only 4 rooms left!FREE cancellation before 25 Jul 2018!<br>Contact:09-42333333 <span class="w3-badge w3-right w3-margin-right">4</span></li>
      </ul> 
</div></div>
</header>
 <!-- Container for the image gallery -->

<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="Bagan images/Royalgarden.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="Bagan images/Aureum.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="Bagan images/Royalgrand.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="Bagan images/Royalsup.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="Bagan images/Royalsup.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="Bagan images/Royalsup.jpg" style="width:100%">
  </div>
    <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="Bagan images/Royalsup.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="Bagan images/Royalgarden.jpg" style="width:100%" onclick="currentSlide(1)" alt="Superior Double or Twin Room with Garden View">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/Aureum.jpg" style="width:100%" onclick="currentSlide(2)" alt="Family Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/Royalgrand.jpg" style="width:100%" onclick="currentSlide(3)" alt="Grand Deluxe Double Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/Royalsup.jpg" style="width:100%" onclick="currentSlide(4)" alt="Superior Double">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/Royalsup.jpg" style="width:100%" onclick="currentSlide(5)" alt="Superior Double">
    </div>
    <div class="column">
      <img class="demo cursor" src="Bagan images/Royalsup.jpg" style="width:100%" onclick="currentSlide(6)" alt="Superior Double">
    </div>
  </div>
</div> 
</body>
</html>