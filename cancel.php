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


<body style="background-image: url('img/bus5.jpg');background-repeat: no-repeat;background-size: cover;">

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
<br>
<br>
<br>
    <form method="post" action="cancel.php">
    <h2 style="color:#be6fcf;font-family: 'Aldrich';font-size: 40px"><u>Ticket Cancellation</u></h1>

    <br>
    <p style="color:#be6fcf;font-family: 'Aldrich'"><b>Enter the Ticket Id</b></p><br>
    <input type="number" id="ticketid" placeholder="Ticket No.." name="tid" required>
    <p style="color:#be6fcf;font-family: 'Aldrich'"><b>Enter the Bus ID</b></p><br>
    <input type="number" id="busid" placeholder="Bus ID.." name="bid" required>
     <br>
    <br>
    <?php include('errors.php')?>
    <br>
    <input type="submit" class="submit-btn" value="Cancel the ticket" name="submit">
   

</form>

</div>

</div>

</body>
</html>