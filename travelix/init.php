<?php

	$host="localhost";
	$user_name="root";
	$user_password="";
	$db_name="tourist_management";
	$con = mysqli_connect($host,$user_name,$user_password,$db_name);
	$dsn        = "mysql:host=$host;dbname=$db_name";
	
	/*if($con){
		echo("SUCCESS");
	}
	else
	{
		echo("FAILED");
	}*/
?>
