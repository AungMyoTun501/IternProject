<?php
	include("confs/config.php");

	$id=$_GET['id'];

	$sql="DELETE FROM place WHERE id=$id";

	mysqli_query($conn, $sql);
	header("location: place.php");

	
	