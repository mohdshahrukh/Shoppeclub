<?php
include("admin area/includes/db.php");
include("functions.php");
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ShoppeClub - Fashion LifeStyle</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img height="300px" width="150px" src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Fashion</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <?php
			   
									   $get_cats = "select * from womencat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=women'>$cat_title</a></li>";
									   
									   }
									   
									   ?>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                       <?php
			   
									   $get_cats = "select * from mencat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=men'>$cat_title</a></li>";
									   
									   }
									   
									   ?>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <?php
			   
									   $get_cats = "select * from kidcat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=kids'>$cat_title</a></li>";
									   
									   }
									   
									   ?>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            
							<li><a href="#">Electronic</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Mobile's Collection</li>
                                         <?php
			   
									   $get_cats = "select * from mobcat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=mob'>$cat_title</a></li>";
									  
									   }
									   
									   ?>
									   
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Laptop's Collection</li>
                                       
									   <?php
			   
									   $get_cats = "select * from laptopcat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=laptop'>$cat_title</a></li>";
									  	   
									   }
									   
									   ?>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Home Appliances</li>
                                        <?php
			   
									   $get_cats = "select * from appliancecat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=appliance'>$cat_title</a></li>";
									  
									   }
									   
									   ?>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Home & Furnitures</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Home Decor </li>
                                        <?php
			   
									   $get_cats = "select * from decorcat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=decor'>$cat_title</a></li>";
									   
									   }
									   
									   ?>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Furniture</li>
                                       <?php
			   
									   $get_cats = "select * from furniturecat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=furniture'>$cat_title</a></li>";
									   
									   }
									   
									   ?>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Home's Furnishing</li>
                                        <?php
			   
									   $get_cats = "select * from furnishingcat";
									   $run_cats = mysqli_query($con, $get_cats);
									   while($row_cats = mysqli_fetch_array($run_cats))
									   {   
									   $cat_id= $row_cats['cat_id']; 
									   $cat_title=$row_cats['cat_title'];
									   echo "<li><a href='shop.php?cat=$cat_id&table=furnishing'>$cat_title</a></li>";
									   
									   }
									   
									   ?>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            
							
                            
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="result.php" method="get">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="signup.php"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span><?php total_items();?></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span><?php total_items();?></span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
			<?php
			$ip = getIp();
			
			$sel="select * from cart where ip = '$ip'";
			$res=mysqli_query($con,$sel);
			while($r=mysqli_fetch_array($res))
			{
			
			 $ip = $r[1];
			 $id = $r[2];
			 $table = $r[3];
			 
			 
			$new_query = "select * from $table where id='$id'";
			$run_query = mysqli_query($con,$new_query);
			
			while($row_cats = mysqli_fetch_array($run_query)){
				$title=$row_cats['product_title'];
				$cost=$row_cats['product_cost'];
				$size=$row_cats['product_size'];
				$product_img1=$row_cats['product_img1'];
				echo "<div class='single-cart-item'>
                    <a href='#' class='product-image'>
                        <center><a href='detail.php?id=$id&table=$table'><img style='height:240px; width:150px;' src='admin area/product_images/$product_img1' class='cart-thumb' alt=''></a></center>
                        <!-- Cart Item Desc -->
                        <div class='cart-item-desc'>
                             
                            <h6>$title</h6>
                            <p class='price'>Rs. $cost</p>
                        </div>
                    </a>
			</div>";
				
			}
			}
		   ?>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
				
                    <li><span>subtotal:</span> <span><?php total_rice();?></span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span><?php total_price();?></span></li>
                </ul>
				<div class="checkout-btn mt-50">
                    <a href="cart.php" class="btn essence-btn">Update Cart</a>
                    
                </div>
                <div class="checkout-btn mt-100">
                    <a href="checkout.php" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h3 style="color:blue;" >ShoppeClub</h3>
                        <h2>New Collection</h2>
                        <a href="collection.php" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                        <div class="catagory-content">
						<?php
                          echo  "<a href='shop.php?table=men'>Fashion</a>";
						  ?>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <?php
                          echo  "<a href='shop.php?table=appliance'>Electronics</a>";
						  ?>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                           <?php
                          echo  "<a href='shop.php?table=furniture'>Home & Furniture</a>";
						  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### 
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="#" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
						 <?php
			   vart();
					        $get_cats = "select * from men union select * from women union select * from kids union select * from mob union select * from laptop union select * from furniture union select * from decor union select * from appliance order by rand() ";
							$run_cats = mysqli_query($con, $get_cats);
						   while($row_cats = mysqli_fetch_array($run_cats))
						   {   
						   $id= $row_cats['id']; 
						   $table= $row_cats['tablename']; 
						   $product_brand=$row_cats['product_brand'];
						   $product_title=$row_cats['product_title'];
						   $product_img1=$row_cats['product_img1'];
						   $product_img2=$row_cats['product_img2'];
						   $product_offer=$row_cats['product_offer'];
						   $product_cost=$row_cats['product_cost'];
						   
						   echo "
						   
						  
						
						
                        <!-- Single Product -->
                        <div class='single-product-wrapper'>
                            <!-- Product Image -->
                            <div class='product-img'>
                                <img style='height:320px;'  src='admin area/product_images/$product_img1' alt=''>
                                <!-- Hover Thumb -->
                                <img class='hover-img' src='admin area/product_images/$product_img2' alt=''>
                                <!-- Favourite -->
                                <div class='product-favourite'>
                                    <a href='index.php' class='favme fa fa-heart'></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class='product-description'>
                                <span>$product_brand</span>
                                <a href='single-product-details.html'>
                                    <h6>$product_title</h6>
                                </a>
                                <p class='product-price'><span class='old-price'>Rs. $product_offer</span>Rs. $product_cost</p>

                                <!-- Hover Content -->
                                <div class='hover-content'>
                                    <!-- Add to Cart -->
                                    <div class='add-to-cart-btn'>
                                        <a href='detail.php?id=$id&table=$table' class='btn essence-btn'>Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>";
						
						}
						   
						?>
						

					</div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Brands Area Start ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand1.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand2.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand3.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand4.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand5.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand6.png" alt="">
        </div>
    </div>
    <!-- ##### Brands Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.php"><img style= "height:300px; width:150px;" src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
						
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.php?table=men">Fashion</a></li>
                                <li><a href="shop.php?table=mob">Electronics</a></li>
                                <li><a href="shop.php?table=furniture">Home & Furniture</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> RDR Infotech. All rights reserved
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>