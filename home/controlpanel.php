<?php
session_start();
include "../dbconnect/db_connect.php";

unset($_SESSION['logstatus']);
$db = new connection();
if(isset($_POST["admin_login"]))
 {
   $user_name=$_POST["admin_email"];
   $user_pass=$_POST["admin_password"];
   if(!empty($user_name) && !empty($user_pass)){
	   $sql=$db->link->query("SELECT * FROM  `create_admin`  WHERE `email`='{$user_name}' AND `password`='{$user_pass}'");

		    if($sql->num_rows>0)
		    {
		    	$_SESSION['logstatus']=1;
		        echo "<script>location='../admin/'</script>";
		    }
		    else
		    {
		        echo "Invalid Username or Password";
		    }
	}
 }

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
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.16/css/uikit.min.css"/>
	<link href="re/css/all.min.css" rel="stylesheet">
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
							<i class="fas fa-phone"></i>&nbsp;&nbsp;<a href="tel:01999576787" style="cursor: pointer;text-decoration: none;color: white;"> 01999576787</a><span style="color: #f4f4f4;">  &nbsp;|  &nbsp;</span><span>
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
									<a href="./?page=register" style=" text-decoration: none; color: #fff; background:#e67e22; color:#fff; padding:5px 8px; border-radius:20px; font-size:13px; "><i class="fas fa-user"></i>&nbsp;Register</a>
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
											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<a class="dropdown-item" href="?page=honey">Honey</a>
											<a class="dropdown-item" href="?page=food_for_health">Food For Health</a>
											<a class="dropdown-item" href="?page=groceries">Groceries</a>
											<a class="dropdown-item" href="?page=dryfish">Dry Fish</a>
											<a class="dropdown-item" href="?page=sweets">Fruits & Sweets</a>
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
	<section class="my-5">
            <div class="container-fluid">
				<div class="row">
					<div class="col-md-4 m-auto">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
							<h5 style="text-align: center; color: grey;">Ofela Admin</h5>
							<div class="form-group">
								<label for="admin_email">Email</label>
								<input type="text" class="form-control mb-2" name="admin_email">
							</div>
							<div class="form-group">
								<label for="admin_password">Password</label>
								<input type="text" class="form-control mt-1 mb-2" name="admin_password">
							</div>
							<button class="btn btn-block mt-1 btn-success" name="admin_login" type="submit">Login</button>
						</form>
					</div>
				</div>
			</div>
        </section>
</body>
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
		<small style="color: black; font-family: 'Lobster', cursive; font-size: medium;" class="d-none d-md-block">it's a Under-Construction project for<a href="http://www.facebook.com/tareq.v2" style="color: red;"target="_blank"> STUDY PURPOSE</a></small>
	</div>
</footer>
<!-- footer end here -->

<!-- script -->

	<script src="resources/js/jquery-3.5.1.slim.min.js"></script>
	<script src="resources/js/bootstrap.bundle.min.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.16/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


</body>
</html>