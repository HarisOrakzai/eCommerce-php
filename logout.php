<?php
	include('repeat/connection.php');
	unset($_SESSION['USER_LOGIN']);
    unset($_SESSION['USER_ID']);
    unset($_SESSION['USER_NAME']);
	header('location:login.php');
	die();
?>