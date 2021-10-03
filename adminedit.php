<?php
$db=mysqli_connect('localhost','root','')or die("Unable to connect to MySQL");
mysqli_select_db($db,"thesis")or die("Could not select example");

 $AdminID=$_GET['AdminID']; 

 if(isset($_POST['btn1']))
{

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

 
$sql = "UPDATE admin SET username='$username',password='$password',email='$email' WHERE AdminId='$AdminID'";
$db->query($sql);
 
    echo"<script>alert('updated')</script>";
    echo"<script>window.location ='adminteam.php'</script>";
        }
?>

 

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
</head>
<body>

<form action="adminedit.php?AdminID=<?php echo $AdminID; ?>" method="post">
  
    <table class="table responsive">
  <div class="form-group row">
    <div class="col-sm-4">
           <div class="col-sm-8">
            <div class="column">
      <label for="">AdminID</label>
    <input type="text" class="form-control" name="AdminID"  value="<?php echo $AdminID; ?>" disabled>
   </div>
    
   <div class="column">
    <label for="">Username</label>
    <input type="text" class="form-control" name="username"  placeholder="Enter username!"  required>
  </div>

    <label for="">password</label>
    <input type="password" class="form-control" name="password"  placeholder="Enter password!" required>
    <label for="">email</label> 
    <input type="text" class="form-control" name="email"  placeholder="Enter email!" required>
    
</table>
   <button type="submit" value="btn1" class="btn btn-info" name="btn1">Update</button>

</form>
</body
</html>
