<?php 
   include('repeat/connection.php');

   if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
   }

   else{
      header('location:login.php');
      die();
   }

   if(isset($_POST['submit'])){

      $productname = $_POST['productname'];
      $price = $_POST['productprice'];
      $lt = $_POST['productlong'];
      $st = $_POST['productshort'];

      $image=$_FILES['productimg']['name'];
      move_uploaded_file($_FILES['productimg']['tmp_name'], '../images/'.$image); 

      $sql="INSERT INTO `ourmenu` (`productname`, `price`, `image`, `lt`, `st`) VALUES ('".$productname."', '".$price."', '".$image."', '".$lt."', '".$st."');";

      $con->query($sql);

      header("Location: productupload.php");
   }
?>


<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
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
   </head>

   <body>

      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="index.php" >Product</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="#" >Product Upload</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="contactus.php" >Contact Us</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>

      <div id="right-panel" class="right-panel">

         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.html"><img src="images/samsung logo.png" alt="Logo"></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>

         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Product Upload</h4>
                        </div>
                        <div class="content pb-0">
                           <div class="animated fadeIn">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="card">
                                       <div class="card-header"><strong>Product</strong><small> Form</small></div>
                                       <form method="post" enctype="multipart/form-data">
                                          <div class="card-body card-block">
                                             <div class="form-group"><label class=" form-control-label">Product Name</label><input type="text" name="productname" placeholder="Enter Product Name" class="form-control"></div>
                                             <div class="form-group"><label class=" form-control-label">Product Price</label><input type="text" name="productprice"  placeholder="Enter Product Price" class="form-control"></div>
                                             <div class="form-group"><label class=" form-control-label">Product Image</label><input type="file" name="productimg"  placeholder="Enter Product Image" class="form-control"></div>
                                             <div class="form-group"><label class=" form-control-label">Long Detail</label><textarea type="text" name="productlong"  placeholder="Enter Long Detail About Product" class="form-control"></textarea></div>
                                             <div class="form-group"><label class=" form-control-label">Short Detail</label><textarea type="text" name="productshort"  placeholder="Enter Short Detail About Product" class="form-control"></textarea></div>
                                             <button name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                             <span>Submit</span>
                                             </button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
   
      </div>

      <script src="js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/popper.min.js" type="text/javascript"></script>
      <script src="js/plugins.js" type="text/javascript"></script>
      <script src="js/main.js" type="text/javascript"></script>
      
   </body>
</html>