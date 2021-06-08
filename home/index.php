<?php
@session_start();
include("../dbconnect/db_connect.php");
$db = new connection();
	
?>
<!DOCTYPE html>
<html lang="en">
<!-- metarials -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="resources/img/logo1.png" type="icon">
	<title>ofela_app</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.16/css/uikit.min.css"/>
	<link rel="stylesheet" href="resources/css/all.min.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/responsive.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
<!-- header start here -->
<header>
	<!-- HEADER TOP -->
	<div class="header-top">
		<div class="container">
			<div class="row py-2">
				<div class="col-12 col-md-4 col-lg-4">
					<div class="input-group input-group-sm mb-1 mt-1">
						 <input type="text" class="form-control" placeholder="Search here">
				  <div class="input-group-append">
					 <span style="background-color: #11b03c; border: none;" class="input-group-text">
					 <i class="fas fa-search" style="color: white;"></i>
					 </span>
				  </div>
				</div>
			   </div>
			   <div class="col-7 py-2 d-none d-lg-block">
				<div class="row pl-3">
					<div class="col-8">
						<span class="size">
							<i class="fas fa-phone" style="font-size: 14px;"></i>&nbsp;&nbsp;<a href="tel:01999576787" style="cursor: pointer;text-decoration: none;color: white; font-size: 14px;"> 01999576787</a><span style="color: #f4f4f4;">  &nbsp;|  &nbsp;</span><span>
							<i class="fas fa-envelope"></i>&nbsp;service@ofelafoods.com &nbsp;</span>
					</span>
					</div>
					<div class="col-12 col-md-4">
						<div>
							<span>
								<span>
								 <a href="./?page=login" style="text-decoration: none; color: #fff; background:#d35400; color:#fff; padding:5px 8px; border-radius:20px; font-size:13px; "><i class="fas fa-user"></i>&nbsp;Login</a>
							   </span>

								 <span>&nbsp;|&nbsp;</span>

								 <span>
									<a href="./?page=register" style=" text-decoration: none; color: #fff; background:#e67e22; color:#fff; padding:5px 8px; border-radius:20px; font-size:13px; "><i class="fas fa-users"></i>&nbsp;Register</a>
								  </span>
							 </span>
						</div>
					</div>
				</div>
			   </div>
		</div>
	</div>  
	</div>
	<!-- HEADER BOTTOM -->
	<div class="header-bottom" uk-sticky="animation: uk-animation-slide-top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 px-0">
					<div class="navigation">
						<nav class="navbar navbar-expand-lg py-0">
							<a class="navbar-brand" href="index.php">
								<img class="img-fluid" src="resources/img/Logo-Ofificial1.png" alt="ofela">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							  <span class="navbar-toggler-icon mt-3" style="color: rgb(8, 160, 99); font-size: 125%;"><i class="fa fa-bars"></i></span>
							</button>
							<div class="collapse navbar-collapse mr-3" id="navbarNav">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<div class="dropdown show">
											<a style="background-color: #13b335; color: #fff; border-radius: 2px;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											All items
											</a>
											<div class="dropdown-content dropdown-menu" aria-labelledby="dropdownMenuLink">
												<?php
										    		$selectitem = "SELECT * FROM `item_table` WHERE `item_id` = 1";
										    		$queryitem = $db->link->query($selectitem);
										    		while($fetch_item=$queryitem->fetch_array())
										    		{
												?>
											<a class="dropdown-item" href="?page=honey"><?php print $fetch_item[1]?></a>
											<?php
												}
											?>
											<?php
									    		$selectitem = "SELECT * FROM `item_table` WHERE `item_id` = 2";
									    		$queryitem = $db->link->query($selectitem);
									    		while($fetch_item=$queryitem->fetch_array())
									    		{
											?>
											<a class="dropdown-item" href="?page=food_for_health"><?php print $fetch_item[1]?></a>
											<?php
												}
											?>
											<?php
									    		$selectitem = "SELECT * FROM `item_table` WHERE `item_id` = 3";
									    		$queryitem = $db->link->query($selectitem);
									    		while($fetch_item=$queryitem->fetch_array())
									    		{
											?>
											<a class="dropdown-item" href="?page=groceries"><?php print $fetch_item[1]?></a>
											<?php
												}
											?>
											<?php
									    		$selectitem = "SELECT * FROM `item_table` WHERE `item_id` = 4";
									    		$queryitem = $db->link->query($selectitem);
									    		while($fetch_item=$queryitem->fetch_array())
									    		{
											?>
											<a class="dropdown-item" href="?page=dryfish"><?php print $fetch_item[1]?></a>
											<?php
												}
											?>
											<?php
									    		$selectitem = "SELECT * FROM `item_table` WHERE `item_id` = 5";
									    		$queryitem = $db->link->query($selectitem);
									    		while($fetch_item=$queryitem->fetch_array())
									    		{
											?>
											<a class="dropdown-item" href="?page=sweets"><?php print $fetch_item[1]?></a>
											<?php
												}
											?>
											</div>
										</div>
									</li>
									<li class="nav-item"><a href="index.php" class="nav-link px-3 pl-auto">Home</a></li>
									<li class="nav-item"><a href="?page=allproduct" class="nav-link px-3">Products</a></li>
									<li class="nav-item"><a href="?page=blog" class="nav-link px-3" href="#">Blog</a></li>
									<li class="nav-item"><a href="?page=about" class="nav-link px-3" href="#">About us</a></li>
									<li class="nav-item d-md-none"><a href="./?page=login" class="nav-link px-3" href="#">Login</a></li>
									<li class="nav-item d-md-none"><a href="./?page=register" class="nav-link px-3" href="#">Sign up</a></li>
									<li class="nav-item"><a style="font-weight: bold; color: green;" class="nav-link px-3" href="https://www.youtube.com/watch?v=xMZnQG-IiKk">How to order</a></li>
								</ul>
							</div>
						  </nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</header>
<!-- MODAL -->
<section>
	
	<div class="container-fluid" style="position:relative;">
		<div  class="uk-position-fixed" style="positon:absolute;top:300px;left:95vw;z-index:9999;">
			<button class="mybtn" type="button" uk-toggle="target: #modal-close-default"><i class="fas fa-shopping-cart"><br><small style="font-size: 12px; line-height: 0 !important;">No item</small></i>
				<small></small></button>
			<div id="modal-close-default" uk-modal>
			<div class="uk-modal-dialog uk-modal-body">
				<button class="uk-modal-close-default" type="button" uk-close></button>
				<div style="height:auto;width:auto;background:green;padding:8px;">
					<h4 style="color:#fff;font-weight:bold;text-align:center;">My Cart</h4>
				</div>
				<div style="width: auto; height: 500px;" class="modal-body">
					<?php 
						$sql="SELECT * FROM `product_table` where product_id = '".$_GET["id"]."'";
						$query=$db->link->query($sql);
						while($fetch_item=$query->fetch_array()){
					?>
					<div style="border-bottom: 1px solid #08a063;padding-bottom:0;margin-top:8px;font-size:14px;" class="row text-muted">
						<div class="col-3">
							<img class="img-fluid w-100" src="../admin/productpic/<?php print $fetch_item[0]?>.jpg" class="card-img-top" alt="img">
						</div>
						<div class="col-4">
							<p><?php print $fetch_item[5]?></p>
						</div>
						<div class="col-2">
							1*575
						</div>
						<div class="col-2">575tk</div>
						<div class="col-1"><a href="#"><i class="fas fa-window-close"></i></a></div>
					</div>
					<?php } ?>

				</div>
				<div style="height:auto;width:auto;background:green;margin-top:0;">
					<h3 style="color:#fff;font-weight:bold;text-align:center;">Total amount:</h3>
				</div>
				<div style="height:auto;width:auto;background:green;margin-top: 0;">
					<h3 style="color:#fff;text-align:center;">Thanks for choose us.</h3>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>
<!-- header end here -->

	<?php
		if(isset($_GET["page"]))
		{
			switch($_GET["page"])
			{

			case "login":
				{
					include("../login/login.php");
				}
			break;

			case "shoppingcart":
				{
					include("shoppingcart.php");
				}
			break;

			case "shoppingcart_form":
				{
					include("shoppingcart-form.php");
				}
			break;

			case "payment_method":
				{
					include("payment_method.php");
				}
			break;
			
			case "register":
				{
					include("../login/register.php");
				}

			break;

			case "allproduct":
				{
					include("allproduct.php");
				}
			break;

			case "blog":
				{
					include("blog.php");
				}
			break;

			case "about":
				{
					include("about.php");
				}
			break;

			case "honey":
				{
					include("honey.php");
				}
			break;

			case "food_for_health":
				{
					include("ffhealth.php");
				}
			break;

			case "groceries":
				{
					include("groceries.php");
				}
			break;

			case "dryfish":
				{
					include("dryfish.php");
				}
			break;

			case "sweets":
				{
					include("sweets.php");
				}
			break;

			case "productdetails":
				{
					include("productdetails.php");
				}
			break;

			case "blog1":
				{
					include("blog1honey.php");
				}
			break;

			case "privacy":
				{
					include("privacy.php");
				}
			break;

			case "returnandrefund":
				{
					include("returnandrefund.php");
				}
			break;

			case "termsandcondition":
				{
					include("termsandcondition.php");
				}
			break;
			}
		}else{
			
		include("indexbody.php");

		}
	?>
						
<!-- footer start here -->
<footer>
	<div class="container-fluid"  style="background-color: #08a063; color: #fff;">
		<div class="container">
			<div class="footer-top" style="text-align: center;">
				<div class="row">
					<div class="col-12 col-md-6 py-4">
						<h6>QUICK CONTACT</h6>
						<div><small>Mahamuda Baper Bari, Rahattarpul, K.B. Aman Ali Road,Chalkbazar, Bakolia, Chottagong.</small></div>
						<div><small>Email: service@ofelafoods.com  </small></div>
						<div><small>Hotline: +880 1999576787</small></div>
					</div>
					<div class="col-12 col-md-3 py-4">
						<h6>IMPORTANTS LINKS</h6>
						<div><a href="?page=termsandcondition" class="text-light">Terms & Conditions</a></div>
						<div><a href="?page=privacy" class="text-light">Privacy & Policy</a></div>
						<div><a href="?page=returnandrefund" class="text-light">Return and Refund policy</a></div>
					</div>
					<div style="max-width: 100vw;" class="col-12 col-md-3 py-5" style="text-align: center;">
						<div class="text-center">
							<h4 class="d-block">Follow us</h4>
						</div>
						<div class="social-links text-center py-2">
							<a href="#"><i class="fab fa-facebook-f"></i> </a>
							<a href="#"><i class="fab fa-youtube"></i> </a>
							<a href="#"><i class="fab fa-whatsapp"></i> </a>
							<a href="#"><i class="fab fa-instagram"></i> </a>
						</div>
					</div>
				</div>
			</div>
			<div  class="footer-middle d-md-none">
				<ul>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bottom py-3 text-center text-white">
		<small style="color: black; font-family: 'Lobster', cursive; font-size: medium;" class="d-none d-md-block">it's a Under-Construction project for<a href="controlpanel.php" style="color: red;"target="_blank"> STUDY PURPOSE</a></small>
	</div>
</footer>
<!-- footer end here -->

<!-- script -->

	<script src="resources/js/jquery-3.5.1.slim.min.js"></script>
	<script src="resources/js/bootstrap.bundle.min.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.16/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
		  $('.tareq').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 6,
			slidesToScroll: 6,
			responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true,
				}
				},
				{
				breakpoint: 600,
				settings: {
					dots: false,
					slidesToShow: 2,
					slidesToScroll: 2
					
				}
				},
				{
				breakpoint: 480,
				settings: {
					dots: false,
					slidesToShow: 2,
					slidesToScroll: 2
				}
				}
			]
		  });
		});
	</script>

</body>
</html>
