<?php
include("admin area/includes/db.php");
include ("functions.php");
session_start(); 
if(isset($_SESSION['id'])){
	header("Location: index.php");
}
 if(isset($_POST['login']))
{
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $get = "SELECT * FROM user WHERE email ='$email' AND pass ='$pass'";
 $run = mysqli_query($con,$get);
 $row = mysqli_fetch_array($run);
 if($row)
 {
  $_SESSION['id'] = $row['user_id'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['email'] = $row['email'];
  
  header("Location: checkout.php");
 }
 else
 {
    echo  "<script>alert('wrong details');</script>";      
 }
}
?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <!-- Favourite Area -->
                
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
                <div class="checkout-btn mt-100">
                    <a href="checkout.php" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">
        <div class="col-md-2" class="single_product_thumb clearfix" >
            
        </div>
        <!-- Single Product Thumb -->
        <div class="col-md-4" class="single_product_thumb clearfix" >
		
		<br>
		<h3>Log In</h3>
            <form action="signup.php" method="post" enctype="multipart/form-data">
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input name="password"type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  
			  <input type="submit" Value="Log In" name="login" class="btn btn-primary">
			
			
			
			</form>
        </div>
		<div class="col-md-1" class="single_product_thumb clearfix" >
            
        </div>
        <!-- Single Product Description -->
        <div class="col-md-4" class="single_product_desc clearfix">
		<br>
		<h3>Sign Up</h3>
            <form action="signup.php" method="post" enctype="multipart/form-data">
			  <div class="form-group">
				<label for="exampleInputname">Full Name</label>
				<input name="name" type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter Full Name">
			</div>
			  <div class="form-group">
				<label for="exampleInputmob">Mobile No.</label>
				<input name="mob" maxlength="10" type="text" class="form-control" id="exampleInputmob" placeholder="Enter Mobile No.">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email Address</label>
				<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  
			  <input type="submit" Value="Sign Up" name="signup" class="btn btn-primary">
			
			
			
			</form>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->
<br>
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

<?php

if(isset($_POST['signup']))
{ 	
 $name = $_POST['name'];
 $mob = $_POST['mob'];
 $email = $_POST['email'];
 
 $g = "SELECT email  FROM user WHERE  email ='$email'";
 $r = mysqli_query($con,$g);
 $ch = mysqli_fetch_array($r);
if (strlen($ch['email']) != 0)
     {
	   echo "<script>alert('This email id is already registered...!!!');</script>"; 
	   header('location:signup.php');
}
else {
    $pass = $_POST['password'];

 $insert_user = "INSERT INTO user (name,email,pass,mob_no) VALUES('$name','$email','$pass','$mob')";
 $run_user = mysqli_query($con, $insert_user);
		
if($run_user)
 {
	  echo "<script>alert('successfully registered!!');</script>";  
	  echo "<script> alert('Please Log In to Continue'); window.location.assign('signup.php'); </script>"; 
 }
else
 {
       echo "<script>alert('error while registering you...');</script>";
 }

}
}

?>




