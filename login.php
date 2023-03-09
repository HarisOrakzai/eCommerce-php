<?php
  include('repeat/header.php');

  $_SESSION['call'] = '';
  $_SESSION['callcor'] = '';

  if(isset($_POST['reg_submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $check_user=mysqli_num_rows(mysqli_query($con,"select * from userlogin where email='$email'"));

    if($check_user>0){
      $_SESSION['call'] = "Email Already Exist";
    }

    else{
      $sql="INSERT INTO `userlogin` (`name`, `email`, `mobile`, `password`) VALUES ('".$name."', '".$email."', '".$mobile."', '".$password."');";
      $con->query($sql);
      $_SESSION['callcor'] = "Account Registered";
    }
  }
?>

<!-- SECTION START -->

    <section style="margin-top: 30px; margin-bottom: 30px;">
      <div class="container">

        <?php 
          if(isset($_SESSION['status'])){
          ?>
            <div class="alert alert-warning" role="alert">
              <strong><?php echo $_SESSION['status'] ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php
            unset($_SESSION['status']);
          }
        ?>
     
        <?php 
          if(isset($_POST['reg_submit']) && ($_SESSION['call'])){
          ?>
            <div class="alert alert-warning" role="alert">
              <strong><?php echo $_SESSION['call'] ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php
            unset($_SESSION['call']);
          }
        ?>

        <?php 
          if(isset($_POST['reg_submit']) && ($_SESSION['callcor'])){
          ?>
            <div class="alert alert-success" role="alert">
              <strong><?php echo $_SESSION['callcor'] ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php
            unset($_SESSION['callcor']);
          }
        ?>

        <div class="row">
          <div class="col-md-6">
            <div class="contact-form-wrap">

              <div class="col-xs-12">
                <div class="contact-title">
                  <h2 class="title__line--6">Login</h2>
                </div>
              </div>

              <div class="col-xs-12">
                <form  action="reguser.php" method="post">

                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="email" placeholder="Your Email*" style="width:100%" required>
                    </div>
                  </div>

                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="password" name="password" placeholder="Your Password*" style="width:100%" required>
                    </div>
                  </div>
                  
                  <div class="contact-btn">
                    <button type="submit" name="log_submit" class="fv-btn">Login</button>
                  </div>

                </form>
              </div>
            </div> 
          </div>
      
          <div class="col-md-6">
            <div class="contact-form-wrap">

              <div class="col-xs-12">
                <div class="contact-title">
                  <h2 class="title__line--6">Register</h2>
                </div>
              </div>

              <div class="col-xs-12">
                <form method="post">

                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="name" placeholder="Your Name*" style="width:100%" required>
                    </div>
                  </div>

                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="email" placeholder="Your Email*" style="width:100%" required>
                    </div>
                  </div>

                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="mobile" placeholder="Your Mobile*" style="width:100%" required>
                    </div>
                  </div>

                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="password" name="password" placeholder="Your Password*" style="width:100%" required>
                    </div>
                  </div>
                  
                  <div class="contact-btn">
                    <button type="submit" name="reg_submit" class="fv-btn" style="margin-bottom: 50px;">Register</button>
                  </div>
                  
                </form>
              </div>

            </div> 
          </div>  
        </div>
      </div>
    </section>

<?php
  include('repeat/footer.php');
?>