<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/fev.ico">


<!--	Css Link
	========================================================-->
    <?php include ('try.php'); ?>


<!--	Title
	=========================================================-->
<title>GharSansar</title>
</head>
<body>


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
		
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('photos/123.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mb-4"><span class="text-primary">Find</span><br>
                                The Best...</h1>
                            <form method="post" action="propertygrid.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                      
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Select Status</option>
												<option value="rent">Rent</option>
												<option value="sale">Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-warning w-100">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->
        
        <!--	Text Block One
		======================================================-->
        <div class="full-row bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-light double-down-line text-center  mb-5">What We Do</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-light hover-text-primary py-3 m-0"><a href="#">Selling Service</a></h5>
                                <p><b>
    Expert marketing & competitive pricing for a smooth sale. Skilled negotiation & clear communication for optimal results.</b></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-light hover-text-primary py-3 m-0"><a href="#">Rental Service</a></h5>
                                <p><b>
    Qualified tenants & market-rate rents for worry-free investment.
    Streamlined lease management & ongoing support for peace of mind.</b></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-light hover-text-primary py-3 m-0"><a href="#">Property Listing</a></h5>
                                <p><b>User-friendly search & detailed descriptions to find your perfect match.
Save listings, schedule viewings, and get personalized assistance</b></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-light hover-text-primary py-3 m-0"><a href="#">Legal Investment</a></h5>
                                <p><b>
    Expert guidance & streamlined process for lucrative opportunities.
    Long-term growth strategies & optional property management.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('photos/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-success">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3 text-primary" >Local Market Expertise:</h5>
										<p><b>We are deeply rooted in the Nepal market, understanding trends and nuances.
Leverage our local knowledge to find your dream property or sell yours for the best price. </b> </p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3 text-primary">Seamless Client Experience:</h5>
										<p><b>We prioritize clear communication and keep you informed throughout the process.
Our dedicated team provides personalized support to ensure a smooth and stress-free experience.</b></p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3 text-primary">Unwavering Commitment to Success:</h5>
										<p><b>Your goals are our top priority, and we negotiate fiercely to get you the best deal.
Our proven track record demonstrates a commitment to exceeding client expectations.</b></p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-info mt-5 mb-4">Discussion</h5>
                            <p class="text-secondary font-weight-bold">We'll sit down with you to understand your specific needs, desired timeline, and target market for your property.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-info mt-5 mb-4">Files Review</h5>
                            <p class="text-secondary font-weight-bold"> We'll analyze market trends, comparable properties, and complete necessary paperwork for a smooth listing.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-info mt-5 mb-4">Acquire</h5>
                            <p class="text-secondary font-weight-bold">We'll market your property through targeted channels, host open houses, and negotiate offers to get you the best price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--	How It Work -->
        
        <!--	Achievement
        ============================================================-->
        <div class="full-row overlay-secondary" style="background-image: url('photos/counterbg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="fact-counter">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-primary" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(id) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>"><?php echo $total?></div>
								<?php } ?>
                                <div class="text-white h5">Property Available</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-primary" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(id) FROM property where selling_type='sale'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>"><?php echo $total?> </div>
								<?php } ?>
                                <div class="text-white h5">Sale Property Available</div>
                            </div>
                        </div>


                        <div class="col-md-3">
                        <div class="count wow text-center mb-sm-50" data-wow-duration="300ms">
                            <i class="flaticon-house flat-large text-primary" aria-hidden="true"></i>

                           <?php
                           $query = mysqli_query($con, "SELECT count(id) AS total FROM property WHERE selling_type='rent'");

                          if ($query) {
                               $row = mysqli_fetch_assoc($query);
                              $total = $row['total'];
                          } else {
                            $total = 0; 
                          }
                          ?>

                          <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php echo $total; ?>"><?php echo $total?>  </div>
                             <div class="text-white h5">Rent Property Available</div>
                      </div>
                    </div>



						


                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-primary" aria-hidden="true"></i>
                                <?php
										$query=mysqli_query($con,"SELECT count(uid) FROM user");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>"><?php echo $total?></div>
								<?php } ?>
                                <div class="text-white h5">Registered Users</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!--	Popular Place -->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Popular Places</h2></div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="photos/thumbnail4/1.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='Morang'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=Morang"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="photos/thumbnail4/2.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='Haridhwar'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['7']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="photos/thumbnail4/3.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='DELHI'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="photos/thumbnail4/4.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='Haridhwar'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</div>



          <!--	Popular Places -->
		
		
		
		
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 


</body>

</html>