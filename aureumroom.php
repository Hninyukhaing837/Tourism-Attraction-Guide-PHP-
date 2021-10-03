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
    <!-- <img src="Bagan images/Bagan.jpg" alt="" height="120" width"100" style="float:left; position:relative;"/> -->
    <h1 >&nbsp; &nbsp; <span>Aureum Palacehotel's <span>Room Entry Page</span></h1>
      <a href="adminhome.php"  class="active">Home</a>
      <a href="tranlist.php">Transportation</a>
        <div class="dropdown">
    <button class="dropbtn">Add Rooms
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="royalroom.php">Add Royalhotel's Room</a>
    <a href="aureumroom.php">Add Aureumhotel's Room</a>
    <a href="princessroom.php">Add Princesshotel's Room</a>
      <a href="hillresortroom.php">Add Mercurehotel's Room</a>
    <a href="homehotelroom.php">Add Homehotel's Room</a>
    <a href="a1room.php">Add A1hotel's Room</a>
       <a href="amazingroom.php">Add Amazinghotel's Room</a>
    <a href="luxroom.php">Add Luxhotel's Room</a>
    <a href="gardenroom.php">Add Hillgardenhotel's Room</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Hotels in Bagan
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Aureumlist.php">Aureum palace <br>Hotel</a>
    <a href="Princesslist.php">Bagan Princess<br>Hotel</a>
    <a href="Royallist.php">Royal Bagan<br>Hotel</a>
     
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Hotels in Mandalay
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Hillresortlist.php">Mercure Mandaly<br>Hill Resort</a>
    <a href="Homehotellist.php">The Home Hotel<br>Mandalay</a>
    <a href="A1list.php">Hotel A1<br>Mandalay</a>
    </div>
  </div>
    <div class="dropdown">
    <button class="dropbtn">Hotels in Beaches
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="amazinglist.php">Amazing Ngapali<br>Resort</a>
    <a href="luxlist.php">Grand Ngwe Saung<br>Resort</a>
    <a href="gardenlist.php">Hill Garden<br>Hotel</a>
    </div>
  </div>
   <ul style="float:right"><a class="active" href="login.php">Log Out</a></ul>
 </div></div>
      <!-- <style>
    body {  

         background-image: url("images/garden1.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size:cover;
       color: #000;
      font: 14px Arial;
     padding: 0;

} 
</style>-->

</header>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','') or die("database can not connect");
mysqli_select_db($con,"thesis");

 if(isset($_POST['add'])){
    $room=$_POST['room'];
      $facility=$_POST['facility'];
        $choice=$_POST['choice'];
        $price=$_POST['price'];
        
   $sql="INSERT INTO aureumroom VALUES ('$room','$facility','$choice','$price')";
    $sql1=mysqli_query($con,$sql);
     
       $count=$con->affected_rows;
      if ($count>0) 
      {
        echo "<script>alert('Successfully added!')</script>";
        echo "<script>window.location='aureumroom.php'</script>";
       }
       
       else {
        echo "<script>alert('Fail!')</script>";
       }

 }
?>

<!DOCTYPE html>
<html lang="en">
   
<head><title></title>
<link href="css/bookform.css" rel="stylesheet">
   <!--  <style>
    body {  

         background-image: url("Bagan images/garden2.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size:cover;
       color: #000;
      font: 14px Arial;
     padding: 0;

} 
</style> -->
</head>
<body>
<form action="aureumroom.php" method="post">
    <label for="">Room Type</label>
    <input type="text" class="form-control" name="room" value="" placeholder="" required><br>
    <label for="">Facilities</label>
    <input type="text" class="form-control" name="facility" value="" placeholder="" required><br>
    <label for="">Choices</label>
    <input type="text" class="form-control" name="choice" value="" placeholder=""required><br>
       <label for="">Price</label><br>
    <input type="text" class="form-control" name="price" value="" required><br>
<br><br>
      <input type="submit" name="add" class="" value="Add"></button>

</form>

</body>
</html>