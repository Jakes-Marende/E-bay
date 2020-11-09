<?php

$server="localhost";
$username="root";
$password="";
$database="ebay";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
	die("Could not connect to the database".mysqli_connect_error());
}
else
{
	echo "Connected successfully to the database";
}


?>