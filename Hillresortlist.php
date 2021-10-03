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
    <h1 >&nbsp; &nbsp; <span>Mercure Mandalay Hill <span>Resort</span></h1>
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
   <a href="Aureumlist.php">Aureum Palace<br>Hotel</a>
    <a href="Tharlist.php">Hotel at Tharabar<br>Gate</a>
    <a href="Ayeyarlist.php">Ayeyar River<br>View Hotel</a>
    </div>
  </div>
   <ul style="float:right"><a class="active" href="login.php">Log Out</a></ul>
 </div></div>
      <!--   <style>
    body {  

         background-image: url("images/f16.jpg");
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
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/datatablebs.css">
<script type="text/javascript" src="js/datatablejq.js"></script>
<script type="text/javascript" src="js/datatablepp.js"></script>
<script type="text/javascript" src="js/datatablebsmin.js"></script>
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/datatables.css"/>
  <script type="text/javascript" src="js/datatables.min.js"></script>
   <script type="text/javascript" src="js/datatables.js"></script>
  <script type="text/javascript">
     $(document).ready( function () {
    $('#mytable').DataTable();
} );

  </script>
</head>
<body>
<table  id="mytable">
   <thead>
    <tr>
     <th>Username</th>
     <th>Phone</th>
     <th>Email</th>
     <th>Guest</th>
     <th>Checkin Date</th>
      <th>Checkout Date</th>
     <th>Room</th>
     <th>Booking Cancel</th>
   </tr>
   </thead>
   <tbody>

<?php
$db=mysqli_connect('localhost','root','')or die("Unable to connect to MySQL");
mysqli_select_db($db,"thesis")or die("Could not select example");
$data1=$db->query("select* from mercure");

while ($row = mysqli_fetch_assoc($data1))
 {
    echo '<tr>';
    foreach($row as $value)
    {
    	echo'<td>'.$value.'</td>';
    }
  

    echo '<td><a href="Hillresortlist.php?username='.$row['username'].'">Delete</a></td>';

}

if(isset($_GET['username'])){
	$username=$_GET['username'];
	$sql="DELETE from mercure where username ='$username'";
	$sql1=mysqli_query($db,$sql);
	echo"<script>alert('delete')</script>";
	echo"<script>window.location ='Hillresortlist.php'</script>";
}


?>
  
</tbody>
</table>
</body>
</html>
