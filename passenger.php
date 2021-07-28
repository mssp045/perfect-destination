<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Passenger Details</title>
	  <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="passenger.css">
    <style type="text/css">
        
     

    </style>
</head>
<body>


<!--Navbar-->
<nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo">logo</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="#" class="nav-links">HOME</a>
            </li>
            <li>
                <a href="#" class="nav-links">ABOUT US</a>
            </li>
            <li>
                <a href="#" class="nav-links">CANCEL TICKET</a>
            </li>
            
        </ul>
</nav>

<script type="text/javascript">
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () 
{
  mainNav.classList.toggle('active');
});
</script>


<div class="rect">
    
<div class="b1">
   <h2>Passenger information:</h2>
   <br>
<form action="psgreg.php" method="POST">
   <p>Name:</p>
   <input type="text" name="name" placeholder="Name" required>
   <p>Age:</p>
   <input type="number" name="age" placeholder="age"><br>
   
   <label>Gender:</label>
      <div class="col-sm-8" style="margin-top: 6px">
            <input type="radio" id="femaleRadio" name="gender" value="Male">
            <label>Male</label>
            <input type="radio" id="maleRadio" name="gender" value="Female" style="margin-left: 10px">
            <label>Female</label>
      </div>
    <hr class="hr">
    <br>
    <div class="b2">
      <h2>Contact Details:</p></h2><br>
      <p>E-mail:</p>
      <input type="email" name="gmail" placeholder="Email">
      <p>Phone no:</p>
      <input type="text" name="phno" placeholder="Phone no">
    </div>

    <div class="flexbox">
        <p>Seat no:<span style="color:blue;"><?php 

             echo $_SESSION['seatno'];


          ?></span></p>
        <p style="padding-left: 150px;">Bus Name:<span style="color:blue"><?php echo $_SESSION['busname']; ?></span></p><?php   ?>
    </div>

    <div class="flexbox">
       <p style="padding-top: 5px;">Amount:<span style="color:blue;">INR.<?php echo $_SESSION['fare'] ?></span></p>
       <p style="padding-left: 95px;padding-top: 5px;">Date:<span style="color:blue"><?php echo $_SESSION['dateid']; ?></span></p>
       
    </div>

    <input type="submit" class="submit-btn" value="Confirm Payment">

</form>
                                        
                        
</div>








</div>






</body>
</html>