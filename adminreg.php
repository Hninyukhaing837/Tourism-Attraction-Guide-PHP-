<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "thesis";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

$user = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}

if($email == '') {
	$errmsg_arr[] = 'You must enter your email';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}


// query
$result = $conn->prepare("SELECT * FROM admin WHERE username= :hjhjhjh  AND email= :asas AND password= :jhjhjhj ");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $email);
$result->bindParam(':jhjhjhj', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows>0) {
header("location: adminhome.php");
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: login.php");
	exit();
}

?>