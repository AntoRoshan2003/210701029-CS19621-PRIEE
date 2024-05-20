<?php 
	
	$host='localhost';
	$username='root';
	$pass='root';
	$db='oasis';

	$conn=mysqli_connect($host,$username,$pass,$db);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
 ?>