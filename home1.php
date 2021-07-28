<?php
session_start();


if(isset($_POST['sub']))
{
   $_SESSION['source']=$_POST['src'];
   $_SESSION['dest']=$_POST['des'];
   $d=$_POST['date1'];
   $_SESSION['dateid']=date("Y-m-d",strtotime($d));
   echo  $_SESSION['dateid'];
   
}
header('location:bus.php');
?>