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
    <img src="Bagan images/train2.jpg" alt="" height="110" width"100" style="float:left; position:relative;"/>
    <h1 >&nbsp; &nbsp; <span>Train <span>Transportation</span></h1>
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
</html><br>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/datatables.css"/>
  <script type="text/javascript" src="js/datatables.min.js"></script>
   <script type="text/javascript" src="js/datatables.js"></script>
  <script type="text/javascript">
     $(document).ready( function () {
    $('#mytable').DataTable();
} );

  </script>-->
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<table  id="mytable">
   <thead>
    <tr>
     <th>From<br>Staion</th>
     <th>To<br>Station</th>
     <th>Train<br>No</th>
     <th>Depart</th>
     <th>Arrive</th>
      <th>Upper Class<br>Sleeper</th>
     <th>Upper Class<br>Seat</th>
     <th>Second Class<br>Seat</th>
     <th>Ordinary Class<br>Seat</th>
   </tr>
   </thead>
   <tbody>

<?php
$db=mysqli_connect('localhost','root','')or die("Unable to connect to MySQL");
mysqli_select_db($db,"thesis")or die("Could not select example");
$data1=$db->query("select* from train");

while ($row = mysqli_fetch_assoc($data1))
 {
    echo '<tr>';
    foreach($row as $value)
    {
    	echo'<td>'.$value.'</td>';
    }
}

?>
  
</tbody>
</table>
</body>
</html>
