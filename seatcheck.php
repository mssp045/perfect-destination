<?php
      session_start();
     include 'config.php'; 
     #$conn = mysqli_connect('localhost:3308','root','','demo');
     $busid = $_SESSION['busid'];
     $dateid = $_SESSION['dateid'];
     
     $verify = 0;

    if(!empty($_POST['seatno']))
    {

        $seatno = $_POST['seatno'];
        $_SESSION['seatno'] = $seatno;
	    if(($seatno>=1)and($seatno<=49))
	    {
		        if(!empty($seatno))
		        {
		        	$query = "SELECT * from `boards` JOIN `ticket` ON boards.pid = ticket.pid WHERE busid = $busid and dateid = '$dateid'";
		        	
		        	$query_run = mysqli_query($conn,$query);

				    $query_num_rows = mysqli_num_rows($query_run);


					if($query_num_rows >= 1)
					{

						while($row = mysqli_fetch_assoc($query_run))
						{
							if( $row['seatno'] == $seatno)
							{
								echo '<span style="color:red;font-size:20px;">**The Seat '.$seatno. ' is aleady Booked</span>';
								$verify = 1;
								break;
							}

						}

						if($verify == 0)
						{
                            echo '<span style="color:Green;font-size:20px;">Seat is Available.</span><br><br>';
						    echo '<a href="passenger.php?seatno='.$seatno.'" ><button class="book">Proceed to Booking</button></a>';
						}
					}
					else
					{
						
						echo '<span style="color:Green;font-size:20px;">Seat is Available.</span><br><br>';
					    echo '<a href="passenger.php?seatno='.$seatno.'" ><button class="book">Proceed to Booking</button></a>';
					}
				}
		}

		else
		{
			echo '<span style="color:red;font-size:20px;">**Invalid Seat No</span>';
		}
	}
	else
	{
	      echo '<span style="color:red;font-size:20px;">**Fill the seat no.</span>';
	}


				    

                    

?>