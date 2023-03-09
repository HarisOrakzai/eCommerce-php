<?php
  include('repeat/header.php');

  $sql1='SELECT * from `ourmenu` LIMIT 4';
  $sql2='SELECT * from `ourmenu` LIMIT 4 OFFSET 4';
  $sql3='SELECT * from `ourmenu` LIMIT 4 OFFSET 8';
  $res1=mysqli_query($con,$sql1);
  $res2=mysqli_query($con,$sql2);
  $res3=mysqli_query($con,$sql3);

?>

<!-- SECTION START -->

  <section>

    <div class="banner2">
      <div class="container">
        <div class="row">

            <div class="col-md-12">
              <div class="heading">
                <h1>OUR MENU</h1>
              </div>  
            </div>

        </div>
      </div>
    </div>

  </section>

<!-- SECTION END -->

<!-- SECTION START -->

      <section>
        <div  class="ourmenu">
          <div class="container">

            <div class="row">
              <div class="col-md-12">

                <h1 class="text-center">Our Menu</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut laboreet dolore magna aliqua.</p>

              </div>
            </div>

            <div class="row mt-5">
              <div class="col-md-12">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                  <div class="menu_navs">

                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#jewellery1" data-toggle="tab">Jewellery1</a></li>
                      <li class="bug"><a href="#jewellery2" data-toggle="tab">Jewellery2</a></li>
                      <li class=""><a href="#jewellery3" data-toggle="tab">Jewellery3</a></li>
                    </ul>

                  </div>
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-md-12">
                <div class="prod_nav_list">
                  <div class="tab-content">

                    <div class="tab-pane active" id="jewellery1">

                      <?php while($row=mysqli_fetch_assoc($res1)): ?>

                      <div class="col-md-6" style="margin-top: 30px;">
                        <div class="br-1">
                          <div class="row">

                            <div class="col-md-5">
                              <img src="images/<?php echo $row['image'];?>" style="height: 213px; width: 100%;">
                            </div>

                            <div class="col-md-7">
    
                              <img src="images/stars.png">
                              <h3><?php echo $row['productname'];?></h3>
                              <p><?php echo $row['st'];?></p>
                              <a href="menudetail.php?id=<?php echo $row['id'];?>" class="shop_btn">Shop Now</a>

                            </div>

                          </div>
                        </div>
                      </div>
                      
                      <?php endwhile;?>

                    </div>

                    <div class="tab-pane" id="jewellery2">

                      <?php while($row=mysqli_fetch_assoc($res2)): ?>

                      <div class="col-md-6" style="margin-top: 30px;">
                        <div class="br-1">
                          <div class="row">

                            <div class="col-md-5">
                              <img src="images/<?php echo $row['image'];?>" style="height: 213px; width: 100%;">
                            </div>

                            <div class="col-md-7">
    
                              <img src="images/stars.png">
                              <h3><?php echo $row['productname'];?></h3>
                              <p><?php echo $row['st'];?></p>
                              <a href="menudetail.php?id=<?php echo $row['id'];?>" class="shop_btn">Shop Now</a>

                            </div>

                          </div>
                        </div>
                      </div>
                      
                      <?php endwhile;?>
                    </div>

                    <div class="tab-pane" id="jewellery3">
                      <?php while($row=mysqli_fetch_assoc($res3)): ?>

                      <div class="col-md-6" style="margin-top: 30px;">
                        <div class="br-1">
                          <div class="row">

                            <div class="col-md-5">
                              <img src="images/<?php echo $row['image'];?>" style="height: 213px; width: 100%;">
                            </div>

                            <div class="col-md-7">
    
                              <img src="images/stars.png">
                              <h3><?php echo $row['productname'];?></h3>
                              <p><?php echo $row['st'];?></p>
                              <a href="menudetail.php?id=<?php echo $row['id'];?>" class="shop_btn">Shop Now</a>

                            </div>

                          </div>
                        </div>
                      </div>
                      
                      <?php endwhile;?>

                    </div>
                    
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