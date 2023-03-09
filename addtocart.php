<?php
include('repeat/header.php');
?>

<!-- SECTION START -->

<section>

  <div class="banner2">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="heading">
            <h1>ADD TO CART</h1>
          </div>
        </div>

      </div>
    </div>
  </div>

</section>

<!-- SECTION END -->

<!-- SECTION START -->

<section>
  <div class="addtocart">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <table class="table carttable">

            <thead>
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Update</th>
                <th>Remove</th>
              </tr>
            </thead>

            <tbody>
              <?php
              if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $val) {
                  $productArr = get_product($con, $key);
                  $image = $productArr[0]['image'];
                  $pname = $productArr[0]['productname'];
                  $price = $productArr[0]['price'];
                  $qty = $val['qty'];
              ?>
                  <tr>

                    <td>
                      <div class="cartproduct">
                        <img src="images/<?php echo $image ?>" style="width: 100px;">
                        <p><?php echo $pname ?></p>
                      </div>
                    </td>

                    <td style="color: red;">$ <?php echo $price ?></td>

                    <td>
                      <div class="counter">
                        <div class="down" onclick="decreaseCount(event, this)">-</div>
                        <input type="number" id="<?php echo $key ?>qty" value="<?php echo $qty ?>">
                        <div class="up" onclick="increaseCount(event, this)">+</div>
                      </div>
                    </td>

                    <td style="color: red;"><?php echo $price * $qty ?></td>

                    <td><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key ?>','update')"><i class="fa fa-refresh fa-2x" style="padding-left: 15px;"></i></a></td>

                    <td><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key ?>','remove')"><i class="fa fa-trash fa-2x" style="padding-left: 15px;"></i></a></td>

                  </tr>
              <?php }
              } ?>
            </tbody>

            <!-- <tbody>
              <?php
              if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $val) {
                  $productArr = get_product($con, $key);
                  $image = $productArr[0]['image'];
                  $pname = $productArr[0]['productname'];
                  $price = $productArr[0]['price'];
                  $qty = $val['qty'];
              ?>


                  <tr>

                    <td>
                      <div class="cartproduct">
                        <img src="images/<?php echo $image ?>" style="width: 100px;">
                        <p><?php echo $pname ?></p>
                      </div>
                    </td>

                    <td style="color: red;">$ <?php echo $price ?></td>

                    <td>
                      <div class="counter">
                        <div class="down" id="count" onclick="decreaseCount(event, this)">-</div>
                        <input type="number" id="qty" value="<?php echo $qty ?>">
                        <div class="up" id="count1" onclick="increaseCount(event, this)">+</div>
                      </div>
                    </td>

                    <div>
                      <td id="notes" style="color: red;"><?php echo $price * $qty ?></td>
                    </div>

                  </tr>


              <?php }
              } ?>
            </tbody> -->

          </table>
        </div>
      </div>

      <div class="row">

        <div class="col-md-6">
          <a href="ourmenu.php" class="btn">CONTINUE SHOPPING</a>
        </div>

        <div class="col-md-6">
          <a href="checkout.php" class="btn" style="float: right;" name="submit">Check Out</a>
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