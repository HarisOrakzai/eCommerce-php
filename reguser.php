<?php
  include('repeat/connection.php');

  if(isset($_POST['log_submit'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    $sql="select * from userlogin where email='$email' and password='$password'";
    $res=mysqli_query($con,$sql);

    $count=mysqli_num_rows($res);
    
    if($count>0){
      $row=mysqli_fetch_assoc($res);
      $_SESSION['USER_LOGIN']='yes';
      $_SESSION['USER_ID']=$row['id'];
      $_SESSION['USER_NAME']=$row['name'];
      header('location:index.php');
      die();
    }
    else{
      $_SESSION['status'] = "Enter Correct Login Details";
      header('location:login.php');
    }
 }
?>