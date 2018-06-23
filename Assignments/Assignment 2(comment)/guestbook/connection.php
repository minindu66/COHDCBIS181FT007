<?php
//configuring the data base
	$username ="root";
	$host ="localhost";
	$password ="";
	$connection=mysqli_connect($host,$username,$password);
	$database=mysqli_select_db($connection,"guestbook");


?>