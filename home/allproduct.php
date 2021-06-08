
		<!-- main start here -->
		<main>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 allpbg" style="background-image: url(resources/img/Capture.PNG);"><h2>All Product</h2>	
					 </div>
				</div>
			</div>
		<section class="all-products">
			<div class="container-fluid">
				<div class="row py-1">
					<?php include("include.php"); ?>
					<div class="col-12 col-md-10">
						<div class="row">
							<?php
				    		$sql="SELECT * FROM `product_table`";
				    		$query=$db->link->query($sql);
				    		while($fetch_item=$query->fetch_array())
				    		{
							?>
							<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2">
								<div class="uk-animation-scale-up uk-transform-origin-bottom-right xxx">
									<a href="index.php?page=productdetails&id=<?php print $fetch_item[0]?>">
										<div class="card text-center" style="width: auto;">
											<img src="../admin/productpic/<?php print $fetch_item[0]?>.jpg" class="card-img-top" alt="#">
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
												<button class="btn px-0 text-light" href="?id=<?php print $fetch_item[0]?>"><i class="fa fa-cart-plus"></i>  Add to Cart</button>
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
		<nav>
			<ul class="pagination justify-content-end mr-3">
			  <li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
				  <span aria-hidden="true">&laquo;</span>
				</a>
			  </li>
			  <li class="page-item"><a class="page-link" href="#">1</a></li>
			  <li class="page-item"><a class="page-link" href="#">2</a></li>
			  <li class="page-item"><a class="page-link" href="#">3</a></li>
			  <li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
				  <span aria-hidden="true">&raquo;</span>
				</a>
			  </li>
			</ul>
		</nav>
		</main>
		<!-- main end here -->
