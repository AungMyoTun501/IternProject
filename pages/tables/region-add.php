<?php
	include("confs/config.php");
	$nameen=$_POST['nameen'];
	$namemm=$_POST['namemm'];
	$remark=$_POST['remark'];
	$lattitude=$_POST['lattitude'];
	$longtitude=$_POST['longtitude'];

	$sql="INSERT INTO region (nameen, namemm,remark,lattitude,longtitude)
	VALUES ('$nameen','$namemm','$remark','$lattitude',
	'$longtitude')";

	mysqli_query($conn, $sql);
	header("location: region.php");
?>