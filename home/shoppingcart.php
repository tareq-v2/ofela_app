<?php
	$sql="SELECT * FROM `product_table` where `product_id`='".$_GET["id"]."'";
	$query=$db->link->query($sql);
	$fetch_item=$query->fetch_array();
?>
<div class="container-fluid">
<div class="row">
	<div class="col-12 allpbg" style="background-image: url(resources/img/Capture.PNG);"><h2>Check Out</h2>	
	 </div>
</div>
<section style="padding-bottom: 60px;">
	<div class="container pt-5 pb-2">
		<div class="row" style="font-size: 14px;">
			<div class="col-md-4" style="position: relative;">
				<figure>
					<div class="aside">
						<div class="rounded-circle icon-sm" style="position: absolute; top: 0; left: 42%; width: 40px; height: 40px;/* background: #218838;*/ border: 2px solid #218838;">
							<h5 style="font-family: ui-rounded; color: #000; margin-left: 0.8rem; margin-top: .35rem;">1</h5>
						</div>
					</div>
					<figcaption style="position: absolute; top: 240%; left: 12%;">
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
					<figcaption style="position: absolute; top: 240%; left: 18%;">
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
					<figcaption style="position: absolute; top: 240%; left: 22%;">
						<p class="text-muted">CONFIRMATION & PAYMENT</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>

<table class="table">
    <thead>
    <tr>
        <th>SL</th>
        <th>Products </th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Remove</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>                                       
    <tr style="border-bottom: 2px solid #c6c6c6;">
      <th>1</th>
        <td>
            <a href="#"><img src="../admin/productpic/<?php print $fetch_item[0]?>.jpg" style="width: 50px;"></a>
            <span><?php print $fetch_item[5]?></span>
            <span> - 500 gm</span>
        </td>
        <td>
            <span><?php print $fetch_item[7]?></span>
        </td>
        <td>
            <span style="font-size: 18px; font-weight: bold;cursor: pointer;"><i class="fa fa-minus-circle"></i></span>
            <span>1</span>
            <span style="font-size: 18px; font-weight: bold;cursor: pointer;"><i class="fa fa-plus-circle mr-5"></i></span>
        </td>
        <td style="text-align:center"><a style="cursor: pointer;"><i class="fa fa-times"></i></a></td>
        <td style="text-align: right">
            <span>
               <?php print $fetch_item[7]?>
            </span>Tk
        </td>
    </tr>          
    <tr>
        <td style="border: none;"></td>
        <td style="border: none;"></td>
        <td style="border: none;"></td>
        <td style="border: none;"></td>
        <td style="border: none; text-align: right;font-weight:bold;">Grand Total</td>
        <td style="border: none; text-align: right;font-weight:bold;">
            <span><?php print $fetch_item[7]?></span>
        </td>
    </tr>
   
    </tbody>
</table>
	<div class="col-12 col-md-12 mb-5">
	  <a href="?page=shoppingcart_form"><span class="btn btn-success" style="width: 20%;">Next</span></a>
	</div>
</div>
