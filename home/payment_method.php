<?php
 if(isset($_POST["submit"]))
    {
        $username = $_POST["fullname"];
        $usermobile = $_POST["mobile"];
        $useremail = $_POST["email"];
        $useraddress = $_POST["address"];
        $usernotes = $_POST["notes"];
        $payment = $_POST["payment"];

        $sql = $db->link->query("INSERT INTO payment_table (fullname, mobile, email, address, note, p_method) VALUES ('$username','$usermobile','$useremail', '$useraddress', '$usernotes', '$payment')");
    }
?>

<div class="container-fluid">
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 allpbg" style="background-image: url(resources/img/Capture.PNG);"><h2>Check Out</h2>	
	 </div>
</div>
<section style="padding-bottom: 60px;">
	<div class="container pt-5 pb-2">
		<div class="row">
			<div class="col-md-4" style="position: relative;">
				<figure>
					<div class="aside">
						<div class="rounded-circle icon-sm" style="position: absolute; top: 0; left: 42%; width: 40px; height: 40px; background: #218838;">
							<h5 class="ml-3 mt-2" style="font-family: ui-rounded; color: #fff;">1</h5>
							
						</div>
					</div>
					<figcaption style="position: absolute; top: 240%;">
						<p class="text-muted">SHOPPING CART & DELIVERY INFORMATION.</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4" style="position: relative;">
				<figure>
					<div class="aside">
						<div class="rounded-circle icon-sm" style="position: absolute; top: 0; left: 42%; width: 40px; height: 40px; background: #218838;">
							<h5 class="ml-3 mt-2" style="font-family: ui-rounded; color: #fff;">2</h5>
						</div>
					</div>
					<figcaption style="position: absolute; top: 240%; left: 12%;">
						<p class="text-muted">BILLING & SHIPPING INFORMATION</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4" style="position: relative;">
				<figure>
					<div class="aside">
						<div class="rounded-circle icon-sm" style="position: absolute; top: 0; left: 42%; width: 40px; height: 40px; border: 2px solid #218838;">
							<h5 style="font-family: ui-rounded; color: #000; margin-left: 0.8rem; margin-top: .35rem;">3</h5>
						</div>
					</div>
					<figcaption style="position: absolute; top: 240%; left: 21%;">
						<p class="text-muted">CONFIRMATION & PAYMENT</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
            		<h4 class="mb-3">Billing address</h4>
                <form method="POST">
	                <div class="row">
	                    <div class="col-md-12 mb-3">
	                        <label for="fullname">Full name</label>
	                        <input type="text" name="fullname" class="form-control">
	                    </div>
	                </div>
	                <div class="mb-3">
	                    <label for="mobile">Mobile</label>
	                    <div class="input-group">
	                        <div class="input-group-prepend">
	                            <span class="input-group-text">+88</span>
	                        </div>
	                        <input type="text" class="form-control" name="mobile" placeholer="01*********">
	                    </div>
	                </div>
	                <div class="mb-3">
	                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
	                    <input type="email" name="email" class="form-control" placeholder="you@example.com">
	                </div>
	                <div class="mb-3">
	                    <label for="address">Address</label>
	                    <input type="text" name="address" class="form-control">
	                </div>
	                <div class="mb-3">
	                    <label>Note<span class="text-muted">(Optional)</span></label>
	                    <textarea class="form-control" name="notes" placeholder="Write Your Text Here." style="height: 180px"></textarea>
	                </div>
	                <hr class="mb-4">
	                <div>
	                  <label>Payment Method</label>
	                    <select class="form-control" name="payment">
	                      <option value="">Select one</option>
	                      <option value="2">Online Payment</option>
	                      <option value="1">Cash on delivery</option>
	                    </select>
	                </div>
	                <br>
	              <input type="checkbox" style="width: auto;"> I agree to the 
	               <a href="#" style="color:black; font-weight:bold;text-decoration: none;">privacy policy</a>, 
	               <a href="#" target="_blank" style="color: black; font-weight: bold; text-decoration: none;">Terms &amp; Conditions</a> and 
	               <a href="#" target="_blank" style="color: black;font-weight: bold; text-decoration: none;">Return &amp; Refund Policy</a>.
	                <hr class="mb-4">
	              <div class="col-12 col-xs-12 col-sm-12">
	                    <div class="row">
		                 	<div class="col-6" style="display: none">
		                	<button class="btn btn-success " type="submit">Checkout&nbsp;&nbsp;
		                		<i class="fa fa-shopping-cart"></i>
		                	</button>
	              		</div> 
		               	<div class="col-6 col-xs-6 col-sm-6" style="display: none">
		     	 			<a href="#"><span class="btn btn-success">Confirm&nbsp;&nbsp;<i class="fa fa-shopping-cart"></i></span></a>
		       			</div>
	                <div class="col-12">
	                <button class="btn btn-block btn-success" name="submit" type="submit">Confirm Purchase
	                </button>
	                </div>
	              </div>
	              </div>
		              <br>
		              <br>
		              <br>
            	</form>
        	</div>
        	<aside class="col-md-4 mt-5">
                        <div class="card mb-3">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Have coupon?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="" placeholder="Coupon code">
                                            <span class="input-group-append">
                                                <button class="btn" style="background: #08A063; color: #fff;">Apply</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                        <div class="card-body">
                                <dl>
                                <dt class="mt-1">Total price:</dt>
                                <dd class="text-right">$69.97</dd>
                                </dl>
                                <dl>
                                <dt>Discount:</dt>
                                <dd class="text-right text-danger">- $10.00</dd>
                                </dl>
                                <dl>
                                <dt>Total:</dt>
                                <dd class="text-right text-dark b"><strong>$59.97</strong></dd>
                                </dl>
                                <hr>
                                   <div class="payment-gateway">
	                                   	<ul class="media" style="padding-left: 15%;">
											<li>
												<a href="#">
													<i class="fab fa-paypal"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-cc-visa"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-cc-mastercard"></i>
												</a>
											</li>
										</ul>
                                   </div>
                                <a href="#" class="btn btn-block" style="background: #08A063; color: #fff;"> Make Purchase </a>
                                <a href="#" class="btn btn-light btn-block">Continue Shopping</a>
                        </div>
                        </div>
            </aside>
		</div>
	</div>
</section>
<style>	
.media{
	font-size: 200%;
	padding: 0;
	margin: 10px 0;
}
.media li:nth-child(1){
	padding-left: 0 !important;
}
.media i{
	color: #000;
}
.media i:hover{
	color: #3167eb;
}
.media li{
	margin-left: 12px;
	list-style-type: none;	
}
.media a{
	text-decoration: none;
	display: inline;
	padding: 5px;
}
</style>
