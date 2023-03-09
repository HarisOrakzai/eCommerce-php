<?php
  include('repeat/header.php');
  $id=$_GET['id'];
  $sql=mysqli_query($con,"SELECT * from `ourmenu` where id = '$id'");
  $row=mysqli_fetch_array($sql);
?>

<!-- SECTION START -->

  <section>

    <div class="banner2">
      <div class="container">
        <div class="row">

          	<div class="col-md-12">
        		  <div class="heading">
            		<h1>MENU DETAIL</h1>
            	</div>  
        		</div>

      	</div>
    	</div>
    </div>

  </section>

<!-- SECTION END -->

<!-- SECTION START -->

  <section>
    
    <div class="menudetail">
      <div class="container">
        <div class=row>

          <div class="col-md-6">
            <div class="menuimg">
              <img src="images/<?php echo $row['image'];?>">  
            </div>
          </div>

          <div class="col-md-6">
            <div class="product-detail">

              <div class="product-detail-title">
                <h2><?php echo $row['productname'];?><span>$ <?php echo $row['price'];?></span></h2>
                <img src="images/stars.png">
                <p><?php echo $row['lt'];?></p>
              </div>

              <div class="counter" style="margin-bottom: 20px;">
                <h3><b>Quantity: </b></h3>
                <div class="down" onclick="decreaseCount(event, this)">-</div>
                <input type="number" id="qty" value="1">
                <div class="up" onclick="increaseCount(event, this)">+</div>
              </div>

              <p>Lorem ipsum dolor sit amet, consectetur. adipisicing elit, sed </p>

              <p>Lorem ipsum dolor sit amet, consectetur. adipisicing elit, sed </p>

              <a class="fr__btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $id ?>','add')">Add to Cart</a>

            </div>
          </div>

          <div class="col-md-12" style="border-bottom: 1px solid #f1f1f1; margin-bottom: 40px;">
            <div class="menu_navs">

              <ul class="nav nav-tabs">
                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                <li class="" style="padding: 0px 9px"><a href="#reviews" data-toggle="tab">Reviews</a></li>
                <li class=""><a href="#additionalinfo" data-toggle="tab">Additional Info</a></li>
              </ul>
              
            </div>
          </div>

          <div class="col-md-12">
            <div class="tab-content">

              <div class="tab-pane active" id="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d</p>
              </div>

              <div class="tab-pane" id="reviews">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit,dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d</p>
              </div>

              <div class="tab-pane" id="additionalinfo">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing eLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing , consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed d</p>
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