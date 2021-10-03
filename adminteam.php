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
    <img src="Bagan images/Bagan.jpg" alt="" height="120" width"100" style="float:left; position:relative;"/>
    <h1 >&nbsp; &nbsp; <span>Admin <span>Team</span></h1>
      <a href="adminhome.php"  class="active">Home</a>
        <a href="adminteam.php">AdminTeam</a><br>
   <ul style="float:right"><a class="active" href="login.php">Log Out</a></ul>
 </div></div>
         <style>
    body {  

         background-image: url("images/Chaungtha.jpg");
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
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

  </script>
</head>
<body>
<table  id="mytable">
   <thead>
    <tr>
      <th>AdminID</th>
     <th>Username</th>
     <th>Password</th>
     <th>Email</th>
      <th>Edit</th>
      <th>Delete</th>
    
    
   </tr>
   </thead>
   <tbody>

<?php
$db=mysqli_connect('localhost','root','')or die("Unable to connect to MySQL");
mysqli_select_db($db,"thesis")or die("Could not select example");
$data1=$db->query("select* from admin ");

while ($row = mysqli_fetch_assoc($data1))
 {
    echo '<tr>';
    foreach($row as $value)
    {
    	echo'<td>'.$value.'</td>';
    }
  
    echo '<td><a href="adminedit.php?AdminID='.$row['AdminID'].'"> Edit</a></td>';

    echo '<td><a href="adminteam.php?AdminID='.$row['AdminID'].'">Delete</a></td>';

}

if(isset($_GET['AdminID'])){
	$AdminID=$_GET['AdminID'];
	$sql="DELETE from admin where AdminID ='$AdminID'";
	$sql1=mysqli_query($db,$sql);
	echo"<script>alert('deleted')</script>";
	echo"<script>window.location ='adminteam.php'</script>";
}


?>
  
</tbody>
</table>
</body>
</html>
