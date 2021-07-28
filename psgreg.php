


<?php

session_start();

require 'config.php';

 


  
if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['gmail']) && isset($_POST['phno']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$age = mysqli_real_escape_string($conn,$_POST['age']);
	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	$email  = mysqli_real_escape_string($conn,$_POST['gmail']);
	$phno   = mysqli_real_escape_string($conn,$_POST['phno']);
    $seatno = mysqli_real_escape_string($conn,$_SESSION['seatno']);
    $busid =  mysqli_real_escape_string($conn,$_SESSION['busid']);
    $dateid = mysqli_real_escape_string($conn,$_SESSION['dateid']);
    $fare = mysqli_real_escape_string($conn,$_SESSION['fare']);
    $src_name = mysqli_real_escape_string($conn,$_SESSION['source']);
    $des_name = mysqli_real_escape_string($conn,$_SESSION['dest']);


    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phno;
	
	
	if(!empty($name) &&  !empty($age) && !empty($gender) && !empty($email) && !empty($phno) )
	{
		
		
			$query = "INSERT INTO `person` VALUES('','$name',$age,'$gender','passenger')";
			$query_run = mysqli_query($conn,$query);

			
    }

    if( !empty($email) && !empty($phno) )
    {
    	    $query = "SELECT * FROM `person` WHERE name='$name' and type='passenger' and age=$age ";
			$query_run = mysqli_query($conn,$query);
            $b = mysqli_fetch_assoc($query_run);
            


            $id = $b['pid'];

            $query = "INSERT INTO `passenger` VALUES($id,'$email','$phno')";
            $query_run = mysqli_query($conn,$query);
            

    }
    if(!empty($seatno))
    {
    	    $query = "SELECT * FROM `person` WHERE name='$name' ";
			$query_run = mysqli_query($conn,$query);
            $b = mysqli_fetch_assoc($query_run);

            $id = $b['pid'];

            $query = "INSERT INTO `ticket` VALUES('',$id,'$dateid',$fare,$seatno)";
            $query_run = mysqli_query($conn,$query);

            
    }
    if(!empty($id))
    {
    	    $query = "INSERT INTO `boards` VALUES($id,$busid)";
            $query_run = mysqli_query($conn,$query);
            
    }
    if(!empty($id))
    {
    	    $query = "SELECT * FROM `ticket` WHERE pid = $id ";
			$query_run = mysqli_query($conn,$query);
            $b1 = mysqli_fetch_assoc($query_run);

            $tid = $b1['tid'];
              
            $_SESSION['t_id'] = $tid;  

            $s="SELECT s_id from station where sname='$src_name';";
            $d="SELECT s_id from station where sname='$des_name';";
            $res1 = mysqli_query($conn,$s);
            $src = mysqli_fetch_assoc($res1);
            $res2 = mysqli_query($conn,$d);
            $des = mysqli_fetch_assoc($res2);

            $src = $src['s_id'];
            $des = $des['s_id'];
    	    
    	    $query = "INSERT INTO `contains` VALUES($tid,$src,$des)";
            $query_run = mysqli_query($conn,$query);
            
    }
    header('Location:bookinginfo.php');
    
			

			
		
}
else
{
		echo '<script>alert("Fill all the Details")</script>';
}






?>






