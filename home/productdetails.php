<?php
@session_start();
	$sql="SELECT * FROM `product_table` where product_id = '".$_GET["id"]."'";
	$query=$db->link->query($sql);
	$fetch_item=$query->fetch_array();

if(isset($_POST["buy"]))
{
	$session=session_id();
	$productID=$_POST["productid"];
	$quantity=$_POST["quantity"];
	if($session)
	{$sql = $db->link->query("INSERT INTO shopping_cart (session_id, product_id, product_quantity) VALUES ('$session','$productID','$quantity')");}
}

?>

<style>
	#pnlayer a{
		color: #fff;
		text-decoration: none;
	}
	#pd-main {
		font-family: 'SolaimanLipi', sans-serif;
		width: auto;
		height: auto;
		background-image: url('resources/img/honeyt.png');
		background-repeat: no-repeat;
		background-position: center;
		background-attachment: fixed;
		background-origin: inherit;
		background-size: cover;
	}
	#pd-main::before {
	    color: #08a063;
	}
	h1{
		color: #08a063;
		font-family: Arial, Helvetica, sans-serif;
	}
</style>  
		<section id="pd-main">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb" style="background-color: transparent;">
					  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
					  <li class="breadcrumb-item"><a href="?page=allproduct">All product</a></li>
					  <li class="breadcrumb-item active" aria-current="page"><?php print $fetch_item[5]?></li>
					</ol>
				</nav> 
			</div>
			<div class="container">
				<div id="pnlayer">
					<div class="row pt-3">
						<div class="col-12 col-md-6">
							<div class="pimage">
								<img class="img-thumbnail" src="../admin/productpic/<?php print $fetch_item[0]?>.jpg" alt="modhu">
							</div>
						</div>
						<div class="col-12 col-md-6 pt-3">
							<div style="display: flex; flex-direction: row; justify-content: space-between;">
								<div><h1><?php print $fetch_item[5]?></h1></div>
								<div class="sharebtn">
									<a href="#"><i class="fas fa-share-alt"></i></a>
								</div>
							</div>
							<br>
							<p><b>Price:</b> ৳ <?php print $fetch_item[7]?></p>
							<p><b>Item:</b> <?php print $fetch_item[1]?></p>
							<p><b>Measurement:</b> 500 gm</p>
							<div>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span><span> 4 Stars</span>
							</div>
							<br>
                			<form method="POST" >
								<p><b>Quantity:</b></p>
								<input type="number" value="1" name="quantity" min="1" max="10">
								<br>
								<br>
								<button class="btn btn-success"><a href="?page=shoppingcart&id=<?php print $fetch_item[0]?>">Buy Now</a></button>
 								<input type="submit" name="buy" value="Add to Cart" class="btn btn-success">
 								
 								<input type="hidden" name="productid" value="<?php print $fetch_item[0]?>">
							</form>

						</div>
					</div>
					<div class="row mt-4">
						<div class="col-12 justify-coontent-center">
							<div style="display: flex; justify-content: center;">
								<button class="tablink uk-active" onclick="openPage('description', this, 'transparent')" id="defaultOpen">Description</button>
							<button class="tablink" onclick="openPage('Benefits', this, 'transparent')" id="defaultOpen">Benefits</button>
							</div>
							
							<div id="description" class="tabcontent">
							 <div class="row mt-3">
								 <div class="col-12">
									 									  
									<p style="text-align:justify"><span style="font-size:16px"><strong>অফেলা মধুর বৈশিষ্ট্যঃ</strong></span></p>
									  
									<p style="text-align:justify"><span style="font-size:16px">১। অফেলা মধু বি এস টি আই অনুমোদিত।</span></p>
									
									<p style="text-align:justify"><span style="font-size:16px">২। ১০০% প্রাকৃতিক এবং র হানি (Raw Honey) </span></p>
									
									<p style="text-align:justify"><span style="font-size:16px">৩। সরাসরি উৎপাদন ক্ষেত্র থেকে সংগ্রহ করা।</span></p>
									
									<p style="text-align:justify"><span style="font-size:16px">৪। বিক্রিত পণ্য ফেরত নেয়। </span></p>
									
									<p style="text-align:justify"><span style="font-size:16px">৫। ক্রেতাগণ যেন সন্তুষ্ট থাকে সেদিকে খেয়াল রাখে।&nbsp; </span></p>
									
									<p style="text-align:justify"><span style="font-size:16px">৬। দ্রুত ডেলিভেরি দিয়ে থাকে।&nbsp; </span></p>
									
									<p><span style="font-size:16px"><a href="#">আরও বিস্তারিত জানতে</a> </span></p>
									
									<p><span style="font-size:16px"><strong>হট লাইনঃ</strong> 01999576787</span></p></span><br><br>
								 </div>
							 </div>
							</div>
							
							<div id="Benefits" class="tabcontent">
								<div class="row mt-3" style="font-family: 'SolaimanLipi', sans-serif;">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<br>
										<span style="font-size: 12px; line-height:40px; color:#585858;"><p><span style="font-size:18px"><strong>সুন্দরববনের মধু</strong></span></p>
									  
									  <p><span style="font-size:16px">বাংলাদেশের প্রায় ২০% মধু সুন্দরবনে উৎপাদন হয়। সুন্দরবনের পাশেই থাকা একটা ক্ষুদ্র গোষ্ঠী বংশপরম্পরায় মধু সংগ্রহ করে আসছে, এদেরকেই মৌয়াল বলা হয়। প্রতিবছরের পহেলা এপ্রিল থেকে তিন মাসের (এপ্রিল, মে ও জুন) জন্য বন বিভাগ মৌয়ালদের মধু সংগ্রহের অনুমতি দেয়। মৌয়ালরা প্রথম দিন থেকেই মধু সংগ্রহের কাজে ব্যস্ত হয়ে পড়ে।</span></p>
									  
									  <p><span style="font-size:16px">সুন্দরবনের মধু শুধু দেশে না, বিদেশেও সুনাম কুরিয়েছে। এখন সুন্দরবনের মধু বিদেশে রপ্তানি হচ্চছে। তাই বলা হয়, <strong>সুন্দরবনের মধু পৃথিবী বিখ্যত।</strong> </span></p>
									  
									  <p><span style="font-size:16px"><strong>&nbsp;</strong></span></p>
									  
									  <p><span style="font-size:18px"><strong>সুন্দরবনের মধুর বৈশিষ্ট্যঃ</strong></span></p>
									  
									  <p><span style="font-size:16px">১। সুন্দরবনের মধু পাতলা হয়। </span></p>
									  
									  <p><span style="font-size:16px">২। ফেনা একটু বেশি হয়।</span></p>
									  
									  <p><span style="font-size:16px">৩। তলায় হাল্কা গাঁত জমে।</span></p>
									  
									  <p><span style="font-size:16px"><strong>&nbsp;</strong></span></p>
									  
									  <p><span style="font-size:16px"><strong>মধুর উপকারিতাঃ </strong></span></p>
									  
									  <p><span style="font-size:16px">মধু এমন একটা তরল পানীয় যার নাম শুনলেই খেতে ইচ্ছে করে। অত্যন্ত সুস্বাদু তরল, মিষ্টি, পানীয়। মধু শুধু মিষ্টি যে তা কিন্তু নয়, মধুর উপকারিতা অনেক যা বলে শেষ করা সম্ভব নয়। </span></p>
									  
									  <p><span style="font-size:16px"><strong>&nbsp;</strong></span></p>
									  
									  <p><span style="font-size:16px">১। রোগ প্রতিরোধ ক্ষমতা বাড়াতে মধু ব্যবহিত হয়। &nbsp;</span></p>
									  
									  <p style="text-align:justify"><span style="font-size:16px">২। ওজন কমাতে মধু ব্যবহিত হয়। &nbsp;</span></p>
									  
									  <p style="margin-left:0in; margin-right:0in"><span style="font-size:16px">৩। বুদ্ধি বাড়াতে মধু ব্যবহিত হয়।</span></p>
									  
									  <p style="margin-left:0in; margin-right:0in"><span style="font-size:16px">৪। রক্ত পরিষ্কারক হিসেবে মধু ব্যবহিত হয়।</span></p>
									  
									  <p style="text-align:justify"><span style="font-size:16px">৫। আমাশয় সারাতে মধু ব্যবহিত হয়।</span></p>
									  
									  <p style="margin-left:0in; margin-right:0in"><span style="font-size:16px"><strong>৭</strong><strong>। </strong>অনিদ্রা দূর করতে মধু ব্যবহিত হয়।</span></p>
									  
									  <p><span style="font-size:16px"><strong>৮</strong><strong>।</strong><strong> </strong>কোষ্ঠকাঠিন্য রোধে মধু ব্যবহিত হয়।</span></p>
									  
									  <p><span style="font-size:16px"><strong>৯। </strong>বদ হজম দূর করতে মধু ব্যবহিত হয়।</span></p>
									  
									  <p><span style="font-size:16px"><strong>১০</strong><strong>। </strong>রুচি বাড়াতে মধু ব্যবহিত হয়।<strong> </strong></span></p>
									  
									  <p>&nbsp;</p>	
									</div>
								</div> 
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<h1 style="margin-left: 20px;">Related products</h1>
				</div>
				<div class="row my-4">
						<?php
				    		$sql="SELECT * FROM `product_table` ORDER BY `product_id` DESC LIMIT 0,3";
				    		$query=$db->link->query($sql);
				    		while($fetch_item=$query->fetch_array())
				    		{
						?>
					<div class="col-12 col-md-4">
						<div class="card text-center" style="width: auto;">
							<img src="../admin/productpic/<?php print $fetch_item[0]?>.jpg" class="card-img-top" alt="img">
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
									<a class="btn px-0 text-light" href="#"><i class="fa fa-cart-plus"></i>  Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		
		<script>
			function openPage(pageName,elmnt,color) {
			  var i, tabcontent, tablinks;
			  tabcontent = document.getElementsByClassName("tabcontent");
			  for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			  }
			  tablinks = document.getElementsByClassName("tablink");
			  for (i = 0; i < tablinks.length; i++) {
				tablinks[i].style.backgroundColor = "";
			  }
			  document.getElementById(pageName).style.display = "block";
			  elmnt.style.backgroundColor = color;
			}
			
			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
		</script>
    </div>