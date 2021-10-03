<html>
<title></title>
<head>
   <link href="css/drop.css" rel="stylesheet">
     <script src="js/drop.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/font-awesome.min.css" rel="stylesheet">
<body>
<header class="w3-container ">
<div class="topnav" id="myTopnav">
    <div class="header-limiter">
    <img src="Bagan images/contact4.jpg" alt="" height="130" width"100" style="float:left; position:relative;"/>
    <h1 >&nbsp; &nbsp; <span>Tourism Attractions <span>Guide</span></h1>
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
<?php
$con=mysqli_connect('localhost','root','') or die("database can not connect");
mysqli_select_db($con,"thesis");

 if(isset($_POST['add'])){
    $name=$_POST['name'];
      $contact=$_POST['contact'];
        $message=$_POST['message'];
        
   $sql="INSERT INTO contact VALUES ('$name','$contact','$message')";
    $sql1=mysqli_query($con,$sql);
     
       $count=$con->affected_rows;
      if ($count>0) 
      {
        echo "<script>alert('Successfully sent!')</script>";
        echo "<script>window.location='contact.php'</script>";
       }
       
       else {
        echo "<script>alert('Fail!')</script>";
       }

 }
?>
<!DOCTYPE html>
<html>
<title></title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/package.css" rel="stylesheet">
    <link href="css/package1.css" rel="stylesheet">


<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>
 <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT US!</h2>
    <!--<p class="w3-opacity w3-center"><i>Traveller? Drop a note!</i></p>-->
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Yangon, Myanmar<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +95 799999999<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: hyk123@gmail.com<br>
      </div>
         <div class="w3-col m6">
    <form action="contact.php" method="post">
       <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
    <input type="text" class="form-control" name="name" value="" placeholder="Name" required><br>
  </div>
     <div class="w3-half">
    <input type="text" class="form-control" name="contact" value="" placeholder="Contact" required></div><br><br>
 <div class="w3-half">
    <textarea  class="form-control" name="message" value="" placeholder="Message"required></textarea><br></div>
      <input type="submit" name="add" class="w3-button w3-black w3-section w3-right" value="Send"></button>

</form>
  </div></div></div>
  
<!-- End Page Content -->
</div>
</body>
</html>