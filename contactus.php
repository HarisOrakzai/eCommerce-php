<?php

  include('repeat/header.php');

  if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('".$name."', '".$email."', '".$message."');";

    $con->query($sql);

    header("Location: contactus.php");
  }
?>

<!-- SECTION START -->

  <section>

    <div class="banner2">
      <div class="container">
        <div class="row">

          	<div class="col-md-12">
        		  <div class="heading">
            		<h1>CONTACT US</h1>
            	</div>  
        		</div>

      	</div>
    	</div>
    </div>

  </section>

<!-- SECTION END -->

<!-- SECTION START -->

    <section>
      <div class="ctus">
        <div class="container">
          <div class="row">

            <div class="col-md-8">
              <div class="leftform">

                <div class="head">
                  <h3>We'd love to hear from you</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                </div>

                <div class="body">

                  <form method="post">

                    <div class="row">

                      <div class="col-md-6">
                        <h4>Your Name</h4>
                        <input type="text" name="name" placeholder="Name">
                      </div>

                      <div class="col-md-6">
                        <h4>Your Email</h4>
                        <input type="text" name="email" placeholder="Email">
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-12">
                        <h4>Message</h4>
                        <textarea class="msg" name="msg" type="text" placeholder="Write Message" rows="6"></textarea> 
                      </div>

                      <div class="col-md-12">
                        <button type="submit" name="sub" class="btn">Send Message</button>
                      </div>

                    </div>

                  </form>

                </div>

              </div>
            </div>

            <div class="col-md-4">
              <div class="rightform">
                
                <div class="head">
                  <h4>Contact Us</h4>
                </div>

                <div class="bodyimg">

                  <ul>

                    <li>
                      
                      <img src="images/location1.png">

                      <div class="headingtxt">
                        <h5>Address</h5>
                        <p>Lorem ipsum dolor sit amet, 
                           consectetur adipisicing elit, sed do</p>
                      </div>

                    </li>

                    <li><img src="images/location2.png">

                      <div class="headingtxt">
                        <h5>Phone</h5>
                        <p>000 000 0000<br>000 000 0000</p>
                      </div>

                    </li>

                    <li><img src="images/location2.png">

                      <div class="headingtxt">
                        <h5>Email</h5>
                        <p>Your@mail.com<br>Your@mail.com</p>
                      </div>

                    </li>

                  </ul>

                  <img class="soci" src="images/footer.png">

                </div>

              </div>
            </div>

          </div>  
        </div> 
      </div>
    </section>

<!-- SECTION END -->

<?php
  include('repeat/aboutusdet.php');
  include('repeat/footer.php');
?>