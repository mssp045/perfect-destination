<?php
  include "config.php";
    $errors=array();
    if(isset($_POST['submit']))
    {
    if(!empty($_POST['tid'])&&!empty($_POST['bid']))
    {

        $tid = $_POST['tid'];
        $bid =$_POST['bid'];
	    if(!empty($tid)&&!empty($bid))
	    {
		            $query = "SELECT tid,busid,b.pid from ticket t,boards b where t.pid=b.pid and tid = $tid and 
		        	busid=$bid";
		        	$query_run = mysqli_query($conn,$query);
		        	$result=mysqli_fetch_assoc($query_run);
				    $query_num_rows = mysqli_num_rows($query_run);
				    $busid=$result['busid'];
				    $perid=$result['pid'];

          

					if($query_num_rows == 1)
					{
					  $kquery="DELETE from boards where busid=$busid and pid=$perid";
					  mysqli_query($conn,$kquery);
					  $squery = "DELETE from contains where tid=$tid";
					  mysqli_query($conn,$squery);
					  $iquery="DELETE from ticket where tid=$tid";
					  mysqli_query($conn,$iquery);
					  header('location:cancelsuccess.php');
					}
					else
					{
						array_push($errors, "**Invalid Seat No or Bus no");
					}
       }

}
else
	{
		array_push($errors, "**Fill the seat no and phone no.");
	}
	}
?>