<?php include('cancelcheck.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket Cancellation</title>
	<link rel="stylesheet" type="text/css" href="cancel.css">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
     <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
     <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
     <!--<script>
        
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

    //parameters1 = 'seatno='+document.getElementById('seatno').value + 'phoneno='+document.getElementById('phoneno').value;
    //parameters2 = 'phoneno='+document.getElementById('phoneno').value;
        
    xmlhttp.open('POST', 'cancelcheck.php', true);
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xmlhttp.send('tid=ticketid&bid=busid');
    
    }

</script>-->
</head>


<body style="background-image: url('img/bus6.jpg');background-repeat: no-repeat;background-size: cover;">

<!--Navbar-->
   <nav class="navbar" style="background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(237,156,4,1) 0%, rgba(36,27,27,1) 79%);">
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
<br>
<br>
<h1>Your Ticket has been  Cancelled Successfully!</h1>
<br>
<br>
<br>
<button type="button" placeholder="Back To Cancellation page"class="submit-btn" style="background-color: rgba(0, 0, 0,0.7);"><a href="cancel.php" style="text-decoration: none;color: rgb(255, 146, 0);font-family: 'Calibri'">Back To Cancellation page</a></button>

</div>

</div>

</body>
</html>