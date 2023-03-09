<?php
	
	include('connection.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['msg'];

	$sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('".$name."', '".$email."', '".$message."');";

	// echo $sql;

	// die;
	$con->query($sql);

	header("Location: contactus.php");

?>