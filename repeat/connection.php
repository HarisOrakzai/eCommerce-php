<?php
	
	session_start();
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'db_haris';

	$con = mysqli_connect($servername , $username , $password , $database);

	if (!$con){
		die('error');
	}
?>