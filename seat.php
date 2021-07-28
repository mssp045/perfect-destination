<?php

session_start();

$_SESSION['fare'] = $_GET['fare'];
$_SESSION['busid'] = $_GET['busid'];
$_SESSION['busname'] = $_GET['busname'];
$_SESSION['time'] = $_GET['time'];



?>


<!DOCTYPE html>
<html>
<head>
	<title>Seat Selection</title>
	<link rel="stylesheet" type="text/css" href="seat.css">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
     <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
     <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
     <script>
        
   function insert() 
    {
    if (window.XMLHttpRequest) 
    {
        xmlhttp = new XMLHttpRequest();
    } 
    else 
    {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
        
    xmlhttp.onreadystatechange = function() 
    {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById('message').innerHTML = xmlhttp.responseText;
            }
    }

    parameters = 'seatno='+document.getElementById('seatno').value;


        
    xmlhttp.open('POST', 'seatcheck.php', true);
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xmlhttp.send(parameters);
    
    }

</script>

     </script>
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

<div class="a1">
    <img src="img/bus3.jpg">
</div>


<div class="flexbox">

<div class="a2">
    <h1>Seat Layout</h1>
    <img src="seat1.jpg">
</div>

<div class="a3">
    <h1 style="color:#0af7eb;font-family: 'Aldrich'">Select your Desired seat number</h1>
    <h1 style="color:#0af7eb;font-family: 'Aldrich'">from the Seat Layout</h1>
    <br>

    
    <p class="a4">Enter the Seat No:</p><br>
    <input type="number" id="seatno" placeholder="Seat No.." step="1" min="1" max="49" required>
    <input type="button" class="submit-btn1" value="Check" onclick="insert();">
    
    <p id="message"></p>
    
</div>

</div>

</body>
</html>