<?php
	include('repeat/connection.php');

	$id=$_GET['id'];
	$updateimg='';

	if(isset($_POST['submit']))
	{
		
		$productname=$_POST['productname'];
		$price=$_POST['productprice'];
		$lt=$_POST['productlong'];
		$st=$_POST['productshort'];

		$image_old=$_POST['productimgold'];
		$image=$_FILES['productimg']['name'];

		if($image != '')
		{
			$updateimg = $image;
			move_uploaded_file($_FILES['productimg']['tmp_name'], '../images/'.$image); 
		}

		else
		{
			$updateimg = $image_old;
	    }
	 
		mysqli_query($con,"UPDATE `ourmenu` SET `productname` = '$productname', `price` = '$price', `image` = '$updateimg', `lt` = '$lt', `st` = '$st' WHERE `ourmenu`.`id` = '$id'");

		header("Location: index.php");
	}
?>