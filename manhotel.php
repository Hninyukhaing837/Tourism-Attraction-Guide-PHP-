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
    <img src="Bagan images/Mhill.jpg" alt="" height="140" width"100" style="float:left; position:relative;"/>
    <h1 >&nbsp; &nbsp; <span>Hotels in <span>Mandalay</span></h1>
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
<html>
<title></title>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/package.css" rel="stylesheet">
    <link href="css/package1.css" rel="stylesheet">

  <link rel="stylesheet" href="css/modalbs.min.css">
  <script src="js/modaljq.min.js"></script>
  <script src="js/modalbs.min.js"></script>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
     <style>
    body{
        font-family: sans-serif;
        font-size: 3 em;
        line-height:2 em;
        background-color:skyblue;
        max-width: 90%;
        margin: 0 auto;

    }
    h1{
        text-align:left;
        text-transform: capitalize;
        padding-top: 1px;
}
p{
  text-align: justify;
}
</style>
</head>
<body>
  
          <div class="w3-container">
         <h1>The Home Hotel Mandalay</h1>
         <img src="Bagan images/Homehotel1.jpg" class="w3-round"  alt="" height="150" width="160" style="float:left; position:relative;"/>
         <div style="padding: 0em 1em 1em">
         <p>This Mandalay hotel is located within a 10-minute stroll of Mandalay Central Railway Station. It also offers complimentary wireless internet.This 3-star hotel provides valet parking, 24-hour room service and a laundry service.The rooms are air conditioned and include bottled water and a mini bar. They are also equipped with a hair dryer and cable/satellite channels.On-site dining options include a restaurant, which is a convenient spot to enjoy a meal.Mandalay International Airport is less than a 40-minute drive from The Home Hotel Mandalay. </p><br>
          <a href="Homehoteldetail.php"><button class="w3-button w3-blue w3-margin-bottom" onclick=""  style="border-radius: 4px;">View Deals</button></a>
          <button type="button"  class="w3-button w3-blue w3-margin-bottom" data-toggle="modal" data-target="#myModal" style="border-radius: 4px;">Book</button>
                 <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                       <div class="modal-dialog">
    
               <!-- Modal content-->
                 <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title" style="color:blue">User Agreement</h4>
                   </div>
                 <div class="modal-body">
                  <p>You must check-in at hotel before 12:00 am on your check-in date.If not, your booking will be cancelled.</p>
                 <p style="color: red">Do you Agree?</p>
                   </div>
                 <div class="modal-footer">
         <a href="Homehotelbook.php"><button class="w3-button w3-green w3-margin-bottom" onclick="" style="border-radius: 4px;">Agree</button></a> 
             <button type="button" class="w3-button w3-red w3-margin-bottom" data-dismiss="modal" style="border-radius: 4px;">No agree</button>
        </div>
      </div> 
    </div>
          </div><hr></div>
         
         <div class="w3-container">
         <h1>Mercure Mandalay Hill Resort</h1>
         <img src="Bagan images/mercury2.jpg" class="w3-round" alt="" height="165" width="170" style="float:left; position:relative;"/>
         <div style="padding: 0em 1em 1em">
         <p>Mandalay Hill Resort is located in Mandalay and offers 5-star accommodation.It provides free Wi-Fi, a gym and an 18-hole golf course.Mandalay Hill Resort Hotel has recently undergone refurbishment and features outdoor tennis courts, an outdoor pool and a sauna. Facilities include facial and body treatments, plus 24-hour room service and a coffee bar.All rooms are air conditioned and equipped with a spa bath, a mini bar and cable/satellite channels. All provide tea and coffee making facilities, wireless internet access and a private bathroom with a bath menu.On-site dining options include a restaurant.Guests looking to unwind while in Mandalay can enjoy the hotel's very own lake.</p><br>
          <a href="Hillresortdetail.php"><button class="w3-button w3-blue w3-margin-bottom" onclick="" style="border-radius: 4px;">View Deals</button></a>
            <button type="button"  class="w3-button w3-blue w3-margin-bottom" data-toggle="modal" data-target="#myModal1" style="border-radius: 4px;">Book</button>
                 <!-- Modal -->
                    <div class="modal fade" id="myModal1" role="dialog">
                       <div class="modal-dialog">
    
               <!-- Modal content-->
                 <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title" style="color:blue">User Agreement</h4>
                   </div>
                 <div class="modal-body">
                  <p>You must check-in at hotel before 12:00 am on your check-in date.If not, your booking will be cancelled.</p>
                 <p style="color: red">Do you Agree?</p>
                   </div>
                 <div class="modal-footer">
         <a href="Hillresortbook.php"><button class="w3-button w3-green w3-margin-bottom" onclick="" style="border-radius: 4px;">Agree</button></a> 
             <button type="button" class="w3-button w3-red w3-margin-bottom" data-dismiss="modal" style="border-radius: 4px;">No agree</button>
        </div>
      </div> 
    </div>
      </div><hr></div>
      
          <div class="w3-container">
         <h1>Hotel A1 Mandalay</h1>
         <img src="Bagan images/hotela1.jpg" class="w3-round"  alt="" height="170" width="170" style="float:left; position:relative;"/>
         <div style="padding: 0em 1em 1em">
         <p>Hotel A1 Mandalay is located in Mandalay and features free Wi-Fi. It also offers a 24-hour reception, a limousine service and 24-hour room service.The rooms are air conditioned and include tea and coffee making facilities, a refrigerator and a mini bar. They all offer bottled water and an in-room safe.Hotel A1 Mandalay houses a restaurant and a bar where guests are able to unwind of an evening with dinner and a drink.Mandalay International Airport is less than a 40-minute drive from the hotel. It is within a 20-minute walk of Mandalay Central Railway Station, which allows convenient access in and around Mandalay.</p><br>
          <a href="A1detail.php"><button class="w3-button w3-blue w3-margin-bottom" onclick="" style="border-radius: 4px;">View Deals</button></a>
             <button type="button"  class="w3-button w3-blue w3-margin-bottom" data-toggle="modal" data-target="#myModal2" style="border-radius: 4px;">Book</button>
                 <!-- Modal -->
                    <div class="modal fade" id="myModal2" role="dialog">
                       <div class="modal-dialog">
    
               <!-- Modal content-->
                 <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title" style="color:blue">User Agreement</h4>
                   </div>
                 <div class="modal-body">
                  <p>You must check-in at hotel before 12:00 am on your check-in date.If not, your booking will be cancelled.</p>
                 <p style="color: red">Do you Agree?</p>
                   </div>
                 <div class="modal-footer">
         <a href="A1book.php"><button class="w3-button w3-green w3-margin-bottom" onclick="" style="border-radius: 4px;">Agree</button></a> 
             <button type="button" class="w3-button w3-red w3-margin-bottom" data-dismiss="modal" style="border-radius: 4px;">No agree</button>
        </div>
      </div> 
    </div>
      </div><hr></div>
     
 
</body>
</html>