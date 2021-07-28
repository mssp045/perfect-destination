<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>Home</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
  
 

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="home.css">

	

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
                <a href="cancel.php" class="nav-links">ADMIN LOGIN</a>
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








<!--body-->

   <div class="booking-cta">
   	  <p>Book your Bus today</p>
   	  <div class="book">
   	    <p><q><em><b>Search-Book-Go</b></em></q></p>
   	  </div>
   	</div>


<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1 row2">
						<div class="booking-form">
							<form action="home1.php" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Leaving from (in caps)</span>
								<input class="form-control" type="text" placeholder="City" name="src">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Going to (in caps)</span>
								<input class="form-control" type="text" placeholder="City" name="des">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Departure</span>
								<input class="form-control" type="date" name="date1" required>
										</div>
									</div>
									
								</div>

								
								<div class="form-btn">
									<input type ="submit" name="sub" value="Search Buses">
								</div>
							</form>
						</div>
					</div>
				

				</div>
			</div>
		</div>
	</div>



</body>
</html>