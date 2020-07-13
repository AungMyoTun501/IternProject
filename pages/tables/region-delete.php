<?php
	include("confs/config.php");

	$id=$_GET['id'];

	$sql="DELETE FROM region WHERE id=$id";

	mysqli_query($conn, $sql);
	header("location: region.php");

	
	