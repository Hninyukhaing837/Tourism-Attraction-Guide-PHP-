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
    <h1 >&nbsp; &nbsp; <span>Contact List</span></h1>
      <a href="adminhome.php"  class="active">Home</a>
  
    <a href="contactlist.php">Contact List</a>
   <ul style="float:right"><a class="active" href="login.php">Log Out</a></ul>
 </div></div>
         <style>
    body {  

         background-image: url("images/contact.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size:cover;
       color: #000;
      font: 14px Arial;
     padding: 0;

} 
</style>
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
     <th>Name</th>
     <th>Contact</th>
     <th>Message</th>
    
   </tr>
   </thead>
   <tbody>

<?php
$db=mysqli_connect('localhost','root','')or die("Unable to connect to MySQL");
mysqli_select_db($db,"thesis")or die("Could not select example");
$data1=$db->query("select* from contact");

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
