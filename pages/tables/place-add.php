<?php
	include("confs/config.php");
	$nameen=$_POST['nameen'];
	$namemm=$_POST['namemm'];
	$remark=$_POST['remark'];
	
		$sql="INSERT INTO place (nameen, namemm,remark,created_date,modified_date)
	VALUES ('$nameen','$namemm','$remark',now(),now())";

	mysqli_query($conn, $sql);
	header("location: place.php");
?>