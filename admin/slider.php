<?php

include("../dbconnect/db_connect.php");

$db = new connection();
$fetch[0]="";
$fetch[1]="";

if(isset($_POST["add"]))
    {
        $sliderid = $_POST["slider_id"];
        $urlName = $_POST["slider_url"];
        if(!empty($sliderid) && !empty($urlName))
        {
        $sql = $db->link->query("INSERT INTO slider (`SL`,`url_name`) VALUES ('$sliderid','$urlName')");

            if($sql)
            {
                $path="sliderimg/$sliderid.jpg";
                move_uploaded_file($_FILES['slider_img']['tmp_name'],$path);
                echo "Add Successfully";
            }
            else 
            {
                echo "Add Unsuccessful";
            }
        }
        else{
            print "Please fill up all fields!!";
        }
    }
if(isset($_POST["update"]))
    {
        $sliderid = $_POST["slider_id"];
        $urlName = $_POST["slider_url"];
        if(!empty($sliderid) && !empty($urlName))
        {
        $sql = $db->link->query("REPLACE INTO slider (`SL`,`url_name`) VALUES ('$sliderid','$urlName')");

        if($sql)
            {
            $path="sliderimg/$sliderid.jpg";
            move_uploaded_file($_FILES['slider_img']['tmp_name'],$path);
            echo "Update Successfully";
            }else 
                {
                    echo "Update Unsuccessful";
                }
                
            }
            else{
                print "Please fill up all fields!!";
            }
}
if(isset($_GET["del"]))
            {
                $del = $db->link->query("DELETE FROM slider where `SL` = '".$_GET["del"]."'");

                    if($del)
                    {

                        $path="sliderimg/".$_GET["del"].".jpg";
                        unlink($path);
                        echo "Delete Successfully";
                    }
                    else 
                    {
                        echo "Delete Unsuccessful";
                    }
            }
    if(isset($_GET["edit"]))
            {
                 $select = $db->link->query("SELECT * FROM slider where `SL` = '".$_GET["edit"]."'");
                 $fetch=$select->fetch_array(); 
            }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin</title>
	<link rel="stylesheet" href="resources/css/all.min.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<header>
		<div id="headerl">
		   <a href="index.php"><h5>Ofela Admin</h5></a>
		</div>
		<div id="headerm">
		   <span><i class="fas fa-user"></i><a href="#"> Welcome Ofela</a></span>
		   <span>|</span>
		   <span><i class="fas fa-sign-out-alt"></i><a href="#"> Logout</a></span>
		</div>
		<div id="headerr">
		   <div class="input-group">
			   <input class="search_input" style="background: transparent; opacity: 0.8;" type="text" placeholder="Search">
		  <a href="#"> <span class="input-group-text"><i class="fas fa-search w-25"></i></span></a>
		   </div>
		</div>
	   </div>	  
	</header>
	<div class="container-fluid">
		<div id="main">	
			<div class="row">
				<div style="background-color: inherit; width: auto; height: 560px;" class="col-3">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingX">
							  <h2 class="mb-0">
								<a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseX" aria-expanded="true" aria-controls="collapseX">
								  Admin Setup
								</a>
							  </h2>
							</div>
							<div id="collapseX" class="collapse" aria-labelledby="headingX" data-parent="#accordionExample">
							  <div class="card-body">
								<ul>
								  
								  <li><a href="addadmin.php"><i class="fas fa-chart-bar"></i> Add Admin</a></li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingOne">
							  <h2 class="mb-0">
								<a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Products
								</a>
							  </h2>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							  <div class="card-body">
								<ul>
								  <li><a href="additem.php"><i class="fas fa-chart-bar"></i> Add Item</a></li>
								  <li><a href="addcategory.php"><i class="fas fa-chart-bar"></i> Add category</a></li>
								  <li><a href="addsubcategory.php"><i class="fas fa-chart-bar"></i> Add sub-category</a></li>
								  <li><a href="addbrand.php"><i class="fas fa-chart-bar"></i> Add Brand</a></li>
								  <li><a href="allproduct.php"><i class="fas fa-chart-bar"></i> Add product</a></li>
								  <li><a href="slider.php"><i class="fas fa-chart-bar"></i> Add slider</a></li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
							  <h2 class="mb-0">
								<a class="btn btn-link btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Dashboard
								</a>
							  </h2>
							</div>			  
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							  <div class="card-body">
								  <ul>
									<li><a href="contactus.php"><i class="fas fa-chart-bar"></i> Contact us</a></li>
									<li><a href="faq.php"><i class="fas fa-chart-bar"></i> Frequently ask questions</a></li>
									<li><a href="howtobuy.php"><i class="fas fa-chart-bar"></i> How to buy</a></li>
									<li><a href="privacypolicy.php"><i class="fas fa-chart-bar"></i> Privacy policy</a></li>
									<li><a href="termsandcondition.php"><i class="fas fa-chart-bar"></i> Terms and conditions</a></li>
									<li><a href="aboutus.php"><i class="fas fa-chart-bar"></i> About us</a></li>
									<li><a href="career.php"><i class="fas fa-chart-bar"></i> Career</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Servers</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Certificates</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Security</a></li>
								  </ul>
							  </div>
							</div>
						</div>
						<div class="card">
						  <div class="card-header" id="headingThree">
							<h2 class="mb-0">
							  <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Bank Information
							  </a>
							</h2>
						  </div>
						  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
							  <ul>
								<li><a href="#"><i class="fas fa-chart-bar"></i> Transaction</a></li>
								<li><a href="#"><i class="fas fa-chart-bar"></i> Account Information</a></li>
								<li><a href="#"><i class="fas fa-chart-bar"></i> withdraw</a></li>
								<li><a href="#"><i class="fas fa-chart-bar"></i> Account Information</a></li>
							  </ul>
							</div>
						  </div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
							  <h2 class="mb-0">
								<a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								 Sales Information
								</a>
							  </h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
							  <div class="card-body">
								<ul>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Total Sales</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Sales Details</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Cash Sales</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Delivery Details</a></li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingSix">
							  <h2 class="mb-0">
								<a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								  SR Information
								</a>
							  </h2>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
							  <div class="card-body">
								<ul>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Total Employee</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Selaries</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Employee Details</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Delivery Boy Details</a></li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFive">
							  <h2 class="mb-0">
								<a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								  Others
								</a>
							  </h2>
							</div>
							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
							  <div class="card-body">
								<ul>
									
									<li><a href="cashOn.php"><i class="fas fa-chart-bar"></i> Cash On Delivery</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Customer profile</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> New Clients</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> Add Customer Info</a></li>
									<li><a href="#"><i class="fas fa-chart-bar"></i> About Benefits</a></li>
								</ul>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div style="background-color: honeydew; width: auto; height: 560px; overflow-y: scroll;" class="col-9">
					<div style="margin: 10px 10px; padding: 0 10px;">
                        <div class="row outerdiv" style="margin-top: 12px;">
                            <div class="col-12">
                                <i class="fas fa-toolbox"></i><span><a href="#"> Add Slider</a></span>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-12">
                                <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <div class="row mb-3">
                                        <label class="col-2 col-form-label">Slider ID</label>
                                        <div class="col-10">
                                          <input type="number" class="form-control binput" name="slider_id" value="<?php print $fetch[0]?>">
                                        </div>
                                      </div>
                                    <div class="row mb-3">
                                        <label class="col-2 col-form-label">Slider URL</label>
                                        <div class="col-10">
                                          <input type="text" class="form-control" name="slider_url" value="<?php print $fetch[1]?>">
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label class="col-2 col-form-label">Slider Image</label>
                                        <div class="col-10">
                                         <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Choose file</span>
                                              </div>
                                              <div class="custom-file">
                                                <input type="file" name="slider_img" class="custom-file-input">
                                              </div>
                                         </div>
                                        </div>
                                      </div>
                                      <div class="addbtn">
                                         <div style="margin-right: 5px;">
                                              <button type="submit" class="btn btn-primary" name="add">
                                            Add
                                          </button>
										  <button type="submit" name="update" class="btn btn-success">
                                            Update
                                          </button>
										  <button type="submit" name="view" class="btn btn-success">
                                            View
                                          </button>
                                        </div>
                                      </div>
                                </form>
                            </div>
                        </div>
					</div>
					<?php
                        if(isset($_POST["view"]))
                        {
                            ?>
                                    <table class="table table-bordered">
                                        <tr>
                                                <td>Slider ID</td>
                                                <td>Slider Name</td>
                                                <td>Picture</td>
                                                <td>Action</td>
                                        </tr>
                                        <?php
                                                $sql=$db->link->query("SELECT * from slider");
                                                $i=1;
                                                while($fetch=$sql->fetch_array())
                                                {?>
                                                    <tr>
                                                            <td><?php echo $fetch[0];?></td>
                                                            <td><?php echo $fetch[1];?></td>
                                                            <td><img src="sliderimg/<?php echo $fetch[0];?>.jpg" height="100" width="100"></td>
                                                       
                                                            <td>
                                                                <a href="slider.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                                                                <a href="slider.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
                                                            </td>
                                                    </tr>
                                                    <?php
                                                }
                                        ?>
                                    </table>
                            <?php
                        }
            		?>
				</div>
			</div>
		 </div>
	</div>
	<footer style="text-align: center;">
       <p>Developed by a team of <span>&nbspSBIT</span> </p>
	</footer>
</div>
	
	<script src="resources/js/jquery-3.5.1.slim.min.js"></script>
	<script src="resources/js/bootstrap.bundle.min.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>