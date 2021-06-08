<?php
 if(isset($_POST["add"]))
    {
        $name = $_POST["name"];
        $mobile = $_POST["number"];
        $address = $_POST["address"];
        $zone = $_POST["zone"];

        $sql = $db->link->query("INSERT INTO shipping_address (name, phone, address, zone) VALUES ('$name', '$mobile', '$address', '$zone')");
    }
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 allpbg" style="background-image: url(resources/img/Capture.PNG);"><h2>Check Out</h2>	
		 </div>
	</div>
	<section style="padding-bottom: 60px;" class="d-none d-md-block">
		<div class="container pt-5 pb-2">
			<div class="row">
				<div class="col-md-4" style="position: relative;">
					<figure>
						<div class="aside">
							<div class="rounded-circle icon-sm" style="position: absolute; top: 0; left: 42%; width: 40px; height: 40px; background: #218838;">
								<h5 style="font-family: ui-rounded; color: #fff; margin-left: 0.9rem; margin-top: .35rem;">1</h5>
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
							<div class="rounded-circle icon-sm" style="position: absolute; top: 0; left: 42%; width: 40px; height: 40px; border: 2px solid #218838;">
								<h5 style="font-family: ui-rounded; color: #000; margin-left: 0.8rem; margin-top: .35rem;">2</h5>
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
							<div class="rounded-circle icon-sm" style="position: absolute; top: 0; left: 42%; width: 40px; height: 40px; background: #218838;">
								<h5 class="ml-3 mt-2" style="font-family: ui-rounded; color: #fff;">3</h5>
							</div>
						</div>
						<figcaption style="position: absolute; top: 240%; left: 18%;">
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
				<div class="col-12 col-md-12" style="border:1px solid #ccc; margin-top: 20px">
			        <h4 style="color: green">BILLING  &amp;SHIPPING INFORMATION</h4>
			        <hr>
			        <form method="POST">
				        <div>
				            <div style="margin-left: -20px;">
				                <ul style="list-style: none;">                                   
				                    <li class="row">
				                        <div class="col-6">
				                            <label>Name</label>
				                            <input class="form-control" type="text" name="name" style="height: 45px;">
				                        </div>
				                        <br>
				                        <div class="col-6">
				                            <label>Phone Number</label>
				                            <input class="form-control" type="text" name="number" style="height: 45px;">
				                        </div>
				                        <br>
				                    </li>
				                    <br>
				                     <li class="row">
				                     	<div class="col-6">
				                            <label>Full Address</label>
				                            <input class="form-control" type="text" name="address" style="height:45px;" placeholder="Write Your Address">
				                        </div><br>
				                        <div class="col-6">
				                            <label>Delivery Zone</label>
				                            <select class="form-control" name="zone" style="height:45px;">
												<option value="1">Chattogram</option>
												<option value="2">Dhaka</option>
												<option value="3">Khulna</option>
												<option value="3">Mymensingh</option>
												<option value="4">Rajshahi</option>
												<option value="5">Rangpur</option>
												<option value="6">Sylhet</option>
												<option value="7">Barishal</option>
				                            </select>
				                        </div>
				                     </li>
				                    </li>
				                </ul>
				            </div>
			                <div class="row">
			                	<div class="col-12">
			                	<button class="btn btn-block btn-success" name="add" type="submit">Submit
			                	</button>
			                </div>
			                </div>
				          <br>
				        </div>              
				    </form>
		  		</div>
			</div>
		</div>
		<div class="row" style="margin-left: 75px; margin-top: 20px;">
			<div class="col-12 col-md-12 mb-5">
			  <a href="?page=payment_method"><span class="btn btn-success" style="width: 20%;">Next</span></a>
			</div>
		</div>
	</section>
</div>
