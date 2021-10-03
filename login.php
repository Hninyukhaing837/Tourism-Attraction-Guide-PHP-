<?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
  echo '<ul style="padding:0; color:red;">';
  foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li>',$msg,'</li>'; 
  }
  echo '</ul>';
  unset($_SESSION['ERRMSG_ARR']);
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title></title>
     
 <link rel="stylesheet" href="css/bookform.css">

      <style>
    body {  

         background-image: url("Bagan images/mpalace1.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size:cover;
       color: #000;
      font: 14px Arial;
     padding: 0;

} 
</style> 
</head>

<body>
  <body>
<div class="container">
  <section id="content">
    <form action="adminreg.php" method="post">
      <h1>Admin Login</h1>
      <label>Username</label>
      <div>
        <input type="text" name="username" placeholder="Enter username" required="" id="username" />
      </div>
      <label>Password</label>
       <div>
        <input type="password" name="password" placeholder="Enter password" required="" id="password" />
      </div>
      <label>Email</label>
      <div>
        <input type="text" name="email" placeholder="Enter email" required="" id="email" />
      </div>
      <div>
        <input type="submit" value="Admin Log In" /><br>
        <a href="home.html">Back to home Page!</a>
      </div>
    </form><!-- form -->
  </section><!-- content -->
</div><!-- container -->
</body>
  
    <script  src="js/adminindex.js"></script>

</body>
</html>
