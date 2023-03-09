<?php 
   include('repeat/connection.php');

   $sql= 'SELECT * FROM `ourmenu`';
   $res=mysqli_query($con,$sql);

   if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
   }

   else{
      header('location:login.php');
      die();
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
                     <a href="#" >Product</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="productupload.php" >Product Upload</a>
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
                           <h4 class="box-title">Products</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Product Name</th>
                                       <th>Price</th>
                                       <th>Image</th>
                                       <th>Long Text</th>
                                       <th>Short Text</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    while($row=mysqli_fetch_assoc($res)): ?>
                                    <tr>
                                       <td><?php echo $row['id'];?></td>
                                       <td><?php echo $row['productname'];?></td>
                                       <td><?php echo $row['price'];?></td>
                                       <td><img src="../images/<?php echo $row['image'];?>"></td>
                                       <td><textarea><?php echo $row['lt'];?></textarea></td>
                                       <td><textarea><?php echo $row['st'];?></textarea></td>
                                       <td>
                                          <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                          <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                       </td>
                                    </tr>
                                    <?php endwhile;?>
                                 </tbody>
                              </table>
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