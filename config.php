<?php


$host ="localhost:3306";
$username="mssp";
$password="sanjay@123";
$database="sanjay";

$conn =  mysqli_connect($host ,$username ,$password ,$database);

if(!$conn)
{
	die("Connection Failed");
}





?>
