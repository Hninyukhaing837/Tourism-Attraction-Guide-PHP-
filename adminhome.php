<!DOCTYPE html>
<html>
<title></title>
<head>
   <link href="css/sidedrop2.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

 <div class="sidenav">
   <img src="Bagan images/Bagan.jpg" alt="" height="100" width"100" style="float:left; position:relative;"/>
    <a href="adminhome.php"  class="active"> Home</a><br>
  <a href="tranlist.php">Transportation</a><br>
   <button class="dropdown-btn">Add Hotels's Rooms
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
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
     <button class="dropdown-btn">Hotels in Bagan
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
      <a href="Royallist.php">Royal Bagan<br>Hotel</a>
    <a href="Aureumlist.php">Aureum palace <br>Hotel</a>
    <a href="Princesslist.php">Bagan Princess<br>Hotel</a>
  
  </div><br>
    <button class="dropdown-btn">Hotels in Mandalay
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="Hillresortlist.php">Mercure Mandaly<br>Hill Resort</a>
    <a href="Homehotellist.php">The Home Hotel<br>Mandalay</a>
    <a href="A1list.php">Hotel A1<br>Mandalay</a>
  </div>
    <button class="dropdown-btn">Hotels in Beaches
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="amazinglist.php">Amazing Ngapali<br>Resort</a>
    <a href="luxlist.php">Hotel Lux<br>Ngwesaung</a>
    <a href="gardenlist.php">Hill Garden<br>Hotel</a>
  </div><br>
    <a href="contactlist.php">Contact List</a>
    <ul style="float:right"><a class="active" href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a></ul>
</div> 

<div class="main">
           <h2>We to Admin Page!</h2>
        <style>
    body {  
  
         background-image: url("Bagan images/mandalay2.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size:cover;
       color: #000;
      font: 14px Arial;
     padding: 0;

} 
</style>
 
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html>