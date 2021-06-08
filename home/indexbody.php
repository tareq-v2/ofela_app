
<main>
	<section>
		<div class="container-fluid">
			<div class="my-slider">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<?php
						  	$sql = "SELECT * FROM `slider`";
						  	$query = $db->link->query($sql);
						  	$i=1;
						  	while($fetch=$query->fetch_array())
						  	{
						  		if($i==1)
						  		{
					  	?>
						<div class="carousel-item active">
						    <img src="../admin/sliderimg/<?php print $fetch[0];?>.jpg" class="d-block img-fluid w-100" alt="logo1">
						</div>
						<?php
						}
						else
						{
						?>
						<div class="carousel-item">
					      <img src="../admin/sliderimg/<?php print $fetch[0];?>.jpg" class="d-block img-fluid w-100" alt="logo1">
					    </div>
						<?php
						}

						$i++;
						}
			    	?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- slider end here -->
	<!-- slider end here -->
	<section class="all-product">
		<div class="container-fluid">
		<!-- NEW PRODUCT START -->
		<div class="section-heading">
			<h3>NEW PRODUCTS</h3>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="tareq" style="font-size: 14px !important;">
						<?php
				    		$sql="SELECT * FROM `product_table` ORDER BY `product_id` DESC LIMIT 0,20";
				    		$query=$db->link->query($sql);
				    		while($fetch_item=$query->fetch_array())
				    		{
						?>
						<div>
							<div class="card text-center ml-3" style="width: auto;" href="#">
								<img src="../admin/productpic/<?php print $fetch_item[0]?>.jpg" class="card-img-top" alt="x">
								<div class="card-body cbody px-0 pb-0">
								<h5 class="card-title pb-3 mb-0" style="font-size: 13px;"><a href="index.php?page=productdetails&id=<?php print $fetch_item[0]?>"><?php print $fetch_item[5]?></a></h5>
								<div>
									<span class="ozon"><?php print $fetch_item[8]?></span>
								</div>
								<br>
								<div>
									<span class="pricing">৳ <?php print $fetch_item[7]?></span>
								</div>
								<br>
								<div class="footer2 bg-success mt-0">
									<a class="btn px-0 text-light" href="?id=<?php print $fetch_item[0]?>"><i class="fa fa-cart-plus"></i>  Add to Cart</a>
								</div>
								</div>
							</div>
						</div>
						<?php
					    	}
					    ?>
					</div>
				</div>
			</div>
		</div>
						<!-- Item catagories 1 -->
		<div class="section-heading">
			<h3>ALL PRODUCTS</h3>
		</div>
		<div class="container-fluid xxx">
			<div style="padding-top: 1rem;" class="row catagories mt-5">
				<div class="col-12 col-md-2 px-0">
					<div class="navigation1">
						
					<div class="uk-inline">
						<?php
							$sql="SELECT * FROM `category_table`";
							$query=$db->link->query($sql);
							$fetch_cat=$query->fetch_array()
						?>
							<i class="fas fa-bars"></i>
							<a type="button">&nbsp; <?php print $fetch_cat[2]?></a>
							<div uk-dropdown="pos: bottom-justify">
								<ul class="uk-nav uk-dropdown-nav">
									<?php
										$sql="SELECT * FROM `product_table` where product_id=1";
										$query=$db->link->query($sql);
										while($fetch_pro=$query->fetch_array()){
									?>
									<li class="uk-active"><a href="#"><?php print $fetch_pro[5]?></a></li>
									<?php
										}
									?>
									<?php
										$sql="SELECT * FROM `product_table` where product_id=9";
										$query=$db->link->query($sql);
										while($fetch_pro=$query->fetch_array()){
									?>
									<li><a href="?page=productdetails&id=9"><?php print $fetch_pro[5]?></a></li>
									<?php
										}
									?>
									<?php
										$sql="SELECT * FROM `product_table` where product_id=4";
										$query=$db->link->query($sql);
										while($fetch_pro=$query->fetch_array()){
									?>
									<li><a href="?page=productdetails&id=4"><?php print $fetch_pro[5]?></a></li>
									<?php
										}
									?>
									<?php
										$sql="SELECT * FROM `product_table` where product_id=5";
										$query=$db->link->query($sql);
										while($fetch_pro=$query->fetch_array()){
									?>
									<li><a href="?page=productdetails&id=5"><?php print $fetch_pro[5]?></a></li>
									<?php
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-10">
					<div class="row">
						<?php
				    		$sql="SELECT * FROM `product_table` ORDER BY `product_id` DESC LIMIT 10,15";
				    		$query=$db->link->query($sql);
				    		while($fetch_item=$query->fetch_array())
				    		{
						?>
						<div class="col-6 col-md-3">
							<a href="index.php?page=productdetails&id=<?php print $fetch_item[0]?>">
								<div class="card text-center mb-3" style="width: auto;">
									<img src="../admin/productpic/<?php print $fetch_item[0]?>.jpg" class="card-img-top" alt="img">
									<div class="card-body cbody px-0 pb-0">
									<h5 class="card-title pb-3 mb-0"><?php print $fetch_item[5]?></h5>
									<div>
										<span class="ozon"><?php print $fetch_item[8]?></span>
									</div>
									<br>
									<div>
										<!-- <div style="margin-bottom: 5px;">
											<del class="pricing2">৳ 699</del>
										</div> -->
										<span class="pricing">৳ <?php print $fetch_item[7]?></span>
									</div>
									<br>
									<div class="footer2 bg-success mt-0">
										<a class="btn px-0 text-light" href="?id=<?php print $fetch_item[0]?>"><i class="fa fa-cart-plus"></i>  Add to Cart</a>
									</div>
									</div>
								</div>
							</a>
						</div>
						<?php
					    }
					    ?>
					</div>
				</div>
			</div>
		</div>
						<!-- Item catagories 2 -->
		<div class="container-fluid xxx">
			<div style="padding-top: 1rem;" class="row mt-5">
				<div class="col-md-2">
					<div style="font-family: 'Lobster', cursive;" class="list-group">
						<div class="list-group-item text-light" style="font-size: 14px; border-radius:0px; background: #08a063;  text-align: left; border:none;">
							<?php
							$sql="SELECT * FROM `category_table` where category_id=3";
							$query=$db->link->query($sql);
							while($fetch_cat=$query->fetch_array()){
							?>
							<i class="fas fa-bars"></i>
							<a type="button">&nbsp; <?php print $fetch_cat[2]?></a>
							<?php
								}
							?>
						</div>
						<div class="d-none d-md-block"style="font-size: 12px;">
							<div style="line-height: 20px; letter-spacing: 1px; font-weight: 400; color:gray;" class="list-group-item">
									<?php
										$sql="SELECT * FROM `product_table` where product_id=13";
										$query=$db->link->query($sql);
										while($fetch_pro=$query->fetch_array()){
									?>
								<a href="?page=productdetails&id=13"><?php print $fetch_pro[5]?></a>
								<?php
									}
								?>
							</div>
							<div style="line-height: 20px; letter-spacing: 1px; font-weight: 400; color:gray;" class="list-group-item"><a href="#">
							<?php
								$sql="SELECT * FROM `product_table` where product_id=11";
								$query=$db->link->query($sql);
								while($fetch_pro=$query->fetch_array()){
							?>
							<a href="?page=productdetails&id=11"><?php print $fetch_pro[5]?></a>
							<?php
								}
							?>
					</div>
					</div>
					</div>
				</div>
				<div class="col-12 col-md-10">
					<div class="row">
						<?php
				    		$sql="SELECT * FROM `product_table` ORDER BY `product_id` DESC LIMIT 10,20";
				    		$query=$db->link->query($sql);
				    		while($fetch_item=$query->fetch_array())
				    		{
						?>
						<div class="col-6 col-md-3">
							<div class="uk-animation-scale-up uk-transform-origin-bottom-right">
								<a href="index.php?page=productdetails&id=<?php print $fetch_item[0]?>">
									<div class="card text-center" style="width: auto;">
										<img src="../admin/productpic/<?php print $fetch_item[0]?>.jpg" class="card-img-top" alt="">
										<div class="card-body cbody px-0 pb-0">
										<h5 class="card-title pb-3 mb-0"><?php print $fetch_item[5]?></h5>
										<div>
											<span class="ozon"><?php print $fetch_item[8]?></span>
										</div>
										<br>
										<div>
											<span class="pricing">৳ <?php print $fetch_item[7]?></span>
										</div>
										<br>
										<div class="footer2 bg-success mt-0">
											<a class="btn px-0 text-light" href="?id=<?php print $fetch_item[0]?>"><i class="fa fa-cart-plus"></i>  Add to Cart</a>
										</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- customer review -->
	<section class="review">
		<div class="container-fluid">
			<div class="container">
				<div class="margin-left: 10px;">
					<h3 class="pt-5 mt-5 section-heading" style="text-align: center; font-family: 'Lobster', cursive; font-size: medium; color: #000;">What Our Clients Say</h3>
				</div>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-body">
							<div class="container">
								<div class="row pb-2 justify-content-center">
									<div class="col-8">
										<div>
											<img class="img-fluid c-image" src="resources/img/DSC_0139-1-1-01.jpeg" alt="img1">
										</div>
										<div>
											<blockquote cite="#">
												<p class="uk-margin-small-bottom">The blockquote element represents content that is quoted from another source, optionally with a citation which must be within a footer or cite element.</p>
												<footer>Someone famous in <cite><a href="#">Source Title</a></cite></footer>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="carousel-body">
							<div class="container">
								<div class="row pb-2 justify-content-center">
									<div class="col-8">
										<div>
											<img class="img-fluid w-25 c-image" src="resources/img/DSC_0139-1-1-01.jpeg" alt="img1">
										</div>
										<div>
											<blockquote cite="#">
												<p class="uk-margin-small-bottom">The blockquote element represents content that is quoted from another source, optionally with a citation which must be within a footer or cite element.</p>
												<footer>Someone famous in <cite><a href="#">Source Title</a></cite></footer>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="carousel-body">
							<div class="container">
								<div class="row pb-2 justify-content-center">
									<div class="col-8">
										<div>
											<img class="img-fluid w-25 c-image" src="resources/img/DSC_0139-1-1-01.jpeg" alt="img1">
										</div>
										<div>
											<blockquote cite="#">
												<p class="uk-margin-small-bottom">The blockquote element represents content that is quoted from another source, optionally with a citation which must be within a footer or cite element.</p>
												<footer>Someone famous in <cite><a href="#">Source Title</a></cite></footer>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</section>

	<section class="blog">
		<div class="container-fluid mb-4">
			<div class="container">
				<div class="margin-left: 10px;">
					<h3 class="pt-5 mt-5" style="text-align: center; font-family: 'Lobster', cursive; font-size: medium; color: #000;">Blogs</h3>
				</div>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-body">
							<div class="container">
								<div class="row pb-2 justify-content-center">
									<div class="col-sm-12 col-md-6">
										<div class="card shadow-lg text-center">
											<a href="?page=blog1">
												<img class="img-thumbnail" src="resources/img/71.jpg" alt="img">
												<h5 class="py-3">মধুর উপকারিতা</h5>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="carousel-body">
							<div class="container">
								<div class="row pb-2 justify-content-center">
									<div class="col-sm-12 col-md-6">
										<div class="card shadow-lg text-center">
											<a href="blog2sundarbanhoney.php">
												<img class="img-thumbnail" src="resources/img/74.jpg" alt="img">
												<h5 class="py-3">সুন্দরববনের মধু</h5>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="carousel-body">
							<div class="container">
								<div class="row pb-2 justify-content-center">
									<div class="col-sm-12 col-md-6">
										<div class="card shadow-lg text-center">
											<a href="blog3kalojeera.php">
												<img class="img-thumbnail" src="resources/img/81.jpg" alt="img">
												<h5 class="py-3">মরণ ছাড়া সকল রোগের মহৌষধ কালোজিরা</h5>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</section>
</main>