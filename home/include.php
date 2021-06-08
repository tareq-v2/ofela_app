						
						<style>
							a:hover{
								text-decoration: none;
								color: #4c964d;
							}
							.xtra-h5 h5{
								font-weight: bold; 
								font-family: ui-rounded; 
								color: #4c964d;
							}
						</style>
						<div class="col-12 col-md-2 xtra-h5">
							<h5>Category</h5>
							<ul style="list-style: none;">
								<?php
						    		$selectitem = "SELECT * FROM `item_table` where `item_id` = 1";
						    		$queryitem = $db->link->query($selectitem);
						    		while($fetch_item=$queryitem->fetch_array())
						    		{
								?>
								<li><a href="?page=honey"><?php print $fetch_item[1]?></a></li>
								<?php
									}
								?>
								<?php
						    		$selectitem = "SELECT * FROM `item_table` where `item_id` = 2";
						    		$queryitem = $db->link->query($selectitem);
						    		while($fetch_item=$queryitem->fetch_array())
						    		{
								?>
								<li><a href="?page=food_for_health"><?php print $fetch_item[1]?></a></li>
								<?php
									}
								?>
								<?php
						    		$selectitem = "SELECT * FROM `item_table` where `item_id` = 3";
						    		$queryitem = $db->link->query($selectitem);
						    		while($fetch_item=$queryitem->fetch_array())
						    		{
								?>
								<li><a href="?page=groceries"><?php print $fetch_item[1]?></a></li>
								<?php
									}
								?>
								<?php
						    		$selectitem = "SELECT * FROM `item_table` where `item_id` = 4";
						    		$queryitem = $db->link->query($selectitem);
						    		while($fetch_item=$queryitem->fetch_array())
						    		{
								?>
								<li><a href="?page=dryfish"><?php print $fetch_item[1]?></a></li>
								<?php
									}
								?>
								<?php
						    		$selectitem = "SELECT * FROM `item_table` where `item_id` = 5";
						    		$queryitem = $db->link->query($selectitem);
						    		while($fetch_item=$queryitem->fetch_array())
						    		{
								?>
								<li><a href="?page=sweets"><?php print $fetch_item[1]?></a></li>
								<?php
									}
								?>
							</ul>
						</div>