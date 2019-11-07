<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?> 
<!doctype html>
<html>
 <head>
   <title>Bazaar.in | Shopping Paradise.</title>
   <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/faviconio/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<!---<link rel="icon" href="http://example.com/favicon.png">-->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 </head>
 <body>
	<!--<img src='img/gpg7.jpg' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>-->

   <div class="top-nav-bar">
		<a href="main.php">
		   <img src="img/my_logo.png" title="Click to visit homepage" width="220" height="95" />
		</a>
     <div class="search-box">
		 <!--<a href="main.html" src="img/Logo.png" class="logo"></a>-->
 	    <input type="text" class="form-control" placeholder="Enter search query :)">
		<span class="input-group-text">
			 <i class="fa fa-search" aria-hidden="true"></i>
		</span>
	</div>

   <div class="menu-bar">
   <ul>
   <li><a href="comingsoon_04\index.html" class="button1"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Cart</a></li>
    <li><a href="Register.php" class="button1">Sign Up</a></li>
<!--   <li><a href="Login.php" class="button1">Log In</a></li>-->
       
    <?php if(isset($_SESSION['username'])): ?>
    <li><a href="Login.php" class="button1">Log Out</a></li>
    <?php else: ?>
    <li><a href="Login.php" class="button1">Log In</a></li>
    <?php endif; ?>
       
   </ul>
   </div>
   </div>
   <section class="header">
   	<div class="side-menu">
   		<ul>
   			<li>End of season Sale<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-1       </li>
   					<li>Sub Menu-1       </li>
   					<li>Sub Menu-1        </li>
   					<li>Sub Menu-1        </li>
   				</ul>
   			</li>
   			<li>Mobiles<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>All Mobile Phones</li>
   					<li>All Mobile Accesories</li>
   					<li>Cases and Covers</li>
   					<li>Screeen Protectors</li>
   					<li>Power banks</li>
   					<li>Refurbished Products</li>
   					<li>Tablets</li>
   					<li>Smart Home </li>
   					<li>Softwares on Sale</li>
   					<li>Tempered</li>
   					<li>Exclusive Products</li>
   					<li>On Sale Products</li>
   					<li>Kindle</li>
   				</ul>
   			</li>
   			<li>Laptops<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>All Computer Accesories</li>
   					<li>Sub Menu-2</li>
   					<li>Sub Menu-2</li>
   					<li>Sub Menu-2</li>
   				</ul>
   			</li>
   			<li>Books<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-3</li>
   					<li>Sub Menu-3</li>
   					<li>Sub Menu-3</li>
   					<li>Sub Menu-3</li>
   				</ul>
   			</li>
   			<li>Fitness<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-4</li>
   					<li>Sub Menu-4</li>
   					<li>Sub Menu-4</li>
   					<li>Sub Menu-4</li>
   				</ul>
   			</li>
   			<li>Baby Care<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-5</li>
   					<li>Sub Menu-5</li>
   					<li>Sub Menu-5</li>
   					<li>Sub Menu-5</li>
   				</ul>
   			</li>
   			<li>Magzines<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-6</li>
   					<li>Sub Menu-6</li>
   					<li>Sub Menu-6</li>
   					<li>Sub Menu-6</li>
   				</ul>
   			</li>
   			<li>Automobile parts<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-7</li>
   					<li>Sub Menu-7</li>
   					<li>Sub Menu-7</li>
   					<li>Sub Menu-7</li>
   				</ul>
   			</li>
   			<li>Music and Games<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-8</li>
   					<li>Sub Menu-8</li>
   					<li>Sub Menu-8</li>
   					<li>Sub Menu-8</li>
   				</ul>
   			</li>
   			<li>Home and Kitchen<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-9</li>
   					<li>Sub Menu-9</li>
   					<li>Sub Menu-9</li>
   					<li>Sub Menu-9</li>
   				</ul>
   			</li>
   			<li>Furniture<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-10</li>
   					<li>Sub Menu-10</li>
   					<li>Sub Menu-10</li>
   					<li>Sub Menu-10</li>
   				</ul>
   			</li>
   			<li>Grocery<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			<li>Movies<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			<li>Footwear<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			<li>Mens Watch<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			<li>Female watch<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			<li>Grooming<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			<li>Hair and Salon<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			<li>Accesories<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			<li>Mens Fashion<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			
   			<li>E-Books<i class="fa fa-angle-right"></i>
   				<ul>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   					<li>Sub Menu-11</li>
   				</ul>
   			</li>
   			
   			
   		</ul>
   	</div>
	<span style="white-space: pre-line"></span>
	<br><br>
   	<div class="slider">
   	<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item ">
      <img src="img/Furniture.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item active">
      <img src="img/iphone.png" class="d-block w-100">
	</div>
	<div class="carousel-item">
		<img src="img/Macbook_small.jpg" class="d-block w-100">
	</div>
    </div>
 	 	<ol class="carousel-indicators">
     		<li data-target="#slider" data-slide-to="0" class="active"></li>
			 <li data-target="#slider" data-slide-to="1"></li>
			 <li data-target="#slider" data-slide-to="2"></li>
     	    <li data-target="#slider" data-slide-to="0"></li>
    	</ol>
	</div>
   	</div>
   </section>
   <section class="featured-categories">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-4" position:relative; left:50px;>
   				<img src="img/shoes.jpg" id="does">
   			</div>
   			<div class="col-md-4">
   				<img src="img/Headphones.jpg">
   			</div>
   			<div  class="col-md-4">
				<img src="img/watch.jpg">
            </div>
   		</div>
   	</div>
   </section>
   <section class="featured-categories2">
	   <div class="container2">
		   <div class="row2">
				<div class="col-md-42" position:relative; left:50px;>
					<img src="img/s3.jpg" id = "does2">
				</div>	
				
		   </div>
	   </div>
   </section>
   <!------------------------------------------------FOOTER------------------------------------------------------------->
   <!------------------------------------------------------------------------------------------------------------------->
   <div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><span>b</span>azaar.in </a></h2>
				<p><h3>We deliver it!</h3></p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href=#>About</a></li>
							<li><a href=#>Products</a></li>
							<li><a href=#>Complaints</a></li>
							<li><a href=#>Contact</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+91 987654321</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:example@email.com"> abcd@something.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>New Delhi, India.

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	</div>
	<!-- //footer -->
	<a href="#home" id="toTop" class="scroll" style="display: block;"> 
		<span id="toTopHover" style="opacity: 1;"></span>
	</a>
  </body>
</html>
