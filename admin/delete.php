<?php
	$id=$_GET['id'];
	include('repeat/connection.php');
	mysqli_query($con,"delete from `ourmenu` where id='$id'");
	header('location:index.php');
?>