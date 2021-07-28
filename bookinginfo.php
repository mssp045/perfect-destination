<?php
session_start();
error_reporting(0);
include 'config.php';
$busid = $_SESSION['busid'];
$sql="SELECT name from person where pid in (SELECT p_id from employee where bid='$busid' and designation='Driver');";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query);

$d_name = $result['name'];



?>



<!DOCTYPE html>
<html>
<head>
   
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Booking Details</title>
  <link rel="stylesheet" type="text/css" href="bookinginfo.css">
	<link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    
    <style type="text/css">
        
     

    </style>
</head>
<body>



<!--Navbar-->
   <nav class="navbar" >
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
                <a href="cancel.php" class="nav-links">CANCEL TICKET</a>
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










<div class="b5">
   <p><b>Have a Great Journey!!!</b></p>
</div>

<div class="rect">
    
<div class="b1">
   
    <hr class="hr">
    <br>
     <b><h2 style="color:yellow;"><center>Ticket Summary</center></p></h2><br>
    <div class="b2" >
      
      <p>Name:</p><br>
      <p>Ticket ID:</p><br>
      <p>Starting Place:</p><br>
      <p>Ending Place:</p><br>
      <p>Number of seats:</p><br>
      <p>E-mail:</p><br>
      <p>Phone no:</p><br>
      <p>Seat no:</p><br>
      <p>Bus Name:</p><br>
      <p>Bus ID:</p><br>
      <p>Driver name:</p><br>
      <p>Amount:</p><br>
      <p>Time:</p><br>
      <p>Date:</p><b> 
      <p>                                
    </div>
    <div class ="b3">
      <p><?php echo $_SESSION['name'] ?></p><br>
      <p><?php echo $_SESSION['t_id'] ?></p><br>
      <p><?php echo $_SESSION['source']; ?></p><br>
      <p><?php echo $_SESSION['dest']; ?></p><br>
      <p> 1 </p><br>
      <p><?php echo $_SESSION['email'] ?></p><br>
      <p><?php echo $_SESSION['phone'] ?></p><br>
      <p><?php echo $_SESSION['seatno'];?></p><br>
      <p><?php echo $_SESSION['busname']; ?></p><br>
      <p><?php echo $_SESSION['busid']; ?></p><br>
      <p><?php echo $d_name; ?></p><br>
      <p>INR.<?php echo $_SESSION['fare'] ?></p><br>
      <p><?php echo $_SESSION['time']; ?></p><br>
      <p><?php echo $_SESSION['dateid']; ?></p></b>   
</div>
</body>
</html>