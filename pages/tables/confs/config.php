<?php
	$dbhost="localhost";
	$dbuser="phpmyadmin";
	$dbpass="123456";
	$dbname="well";

	$conn=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	mysqli_select_db($conn, $dbname);
?>