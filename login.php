<?php
	session_start();
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	if($name == "mrbean" and $email == "a@email.com" and $password == "55")
	{
		$_SESSION['auth']=true;
		header("location: index.php");
	}
	else
		header("location: loginform.php");
	?>