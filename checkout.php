<?php
  include('repeat/header.php');

  if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
    header('location: index.php');
  }

  // echo '<pre>';
	// print_r($_SESSION);

  if(isset($_POST['submit'])){
    if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){
      header('location:good.php'); 
    }

    else{
      header('location:login.php');
      die();
    }
  }
?>

<!-- SECTION START -->

    <section>

      <div class="banner2">
        <div class="container">
          <div class="row">

            	<div class="col-md-12">
          		  <div class="heading">
              		<h1>CHECK OUT</h1>
              	</div>  
          		</div>

        	</div>
      	</div>
      </div>

    </section>

<!-- SECTION END -->

<!-- SECTION START -->

    <section>
      <div class="checkout">
        <div class="container">
          <div class="row">

            <div class="col-md-12">

              <table class="table carttable">

                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Total Price</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    if(isset($_SESSION['cart'])){
                      $cart_total=0;
                      foreach($_SESSION['cart'] as $key=>$val){
                        $productArr=get_product($con,$key);
                        $image=$productArr[0]['image'];
                        $pname=$productArr[0]['productname'];
                        $price=$productArr[0]['price'];
                        $st=$productArr[0]['st'];
                        $qty=$val['qty'];
                        $cart_total=$cart_total+($price*$qty);
                    ?>

                  <tr>
                    
                    <td>
                        <div style="display: flex; align-items: center; font-weight: bold;">
                        <img src="images/<?php echo $image?>" style="width: 100px;">
                        <h3 style="padding-left: 20px; color: red;"><?php echo $pname?></h3>
                        <p class="col-md-7" style="margin-left: 20px;"><?php echo $st?></p>
                      </div>
                    </td>

                    <td>
                      <div style="margin-right: 87px;">
                        <?php echo $price?>
                      </div>
                    </td>

                    <td>
                      <div style="margin-right: 87px;"><?php echo $price*$qty ?></div>
                    </td>

                    <td><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="fa fa-trash fa-2x" style="padding-left: 15px;"></i></a></td>

                  </tr>  

                  <?php } }?> 
                </tbody>

              </table>

            </div>


            <div class="col-md-12 subtot">

              <div class="col-md-6">

                <h3>Shopping Summary</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d </p>

                <h4>Have a coupon code?</h4>

                <input type="text" placeholder="Enter promo code here">
                <button type="button" class="btn">&#8594</button>

              </div>

              <div class="col-md-6">

                <h4 class="he4">Subtotal <span> <?php echo $cart_total ?></span></h4>
                <h4 class="he2">Tax <span> $2.52 </span></h4>
                <h4 class="he4">Total <span> <?php echo $cart_total+2.52 ?> </span></h4>

                <form method="post">
                  <a><button type="submit" name="submit" class="btn1">CHECK OUT</button></a>
                </form>

                <a href="ourmenu.php"><button type="button" class="btn2">Continue Shopping</button></a>

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