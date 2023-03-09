<?php
	include('repeat/connection.php');
	$id=$_GET['id'];
	$query=mysqli_query($con,"select * from `ourmenu` where id ='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/normalize.css">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/themify-icons.css">
	  <link rel="stylesheet" href="css/pe-icon-7-filled.css">
	  <link rel="stylesheet" href="css/flag-icon.min.css">
	  <link rel="stylesheet" href="css/cs-skin-elastic.css">
	  <link rel="stylesheet" href="css/style.css">
	  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<title></title>
</head>

<style>
	input{
		margin-bottom: 30px;
	}
</style>

<body>
	<h2>Edit</h2>

	<form method="post" action="update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
      <div class="card-body card-block">
         <div class="form-group"><label class=" form-control-label">Product Name</label><input type="text" value="<?php echo $row['productname']; ?>" name="productname" class="form-control"></div>
         <div class="form-group"><label class=" form-control-label">Product Price</label><input type="text" value="<?php echo $row['price']; ?>" name="productprice" class="form-control"></div>
         <div class="form-group"><label class=" form-control-label">Product Image</label><input type="file" name="productimg" class="form-control">
         <input type="hidden" name="productimgold" value="<?php echo $row['image']; ?>" class="form-control"></div>
         <div class="form-group"><label class=" form-control-label">Long Detail</label><textarea type="text" value="" name="productlong" class="form-control"><?php echo $row['lt']; ?></textarea></div>
         <div class="form-group"><label class=" form-control-label">Short Detail</label><textarea type="text" value="" name="productshort" class="form-control"><?php echo $row['st']; ?></textarea></div>
         <button name="submit" type="submit" class="btn btn-lg btn-info btn-block">
         <span>Submit</span>
         </button>
      </div>
   </form>

   <script src="js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
   <script src="js/popper.min.js" type="text/javascript"></script>
   <script src="js/plugins.js" type="text/javascript"></script>
   <script src="js/main.js" type="text/javascript"></script>

</body>
</html>