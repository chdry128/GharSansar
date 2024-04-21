<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");



if(isset($_POST['submit']))
{   
    $aid= $_SESSION['agentid'];

    $uid=$_SESSION['uid'];
    
    $name=$_POST['firstname'];
    $email=$_POST['Email'];
    $phone=$_POST['Phone'];
    $message=$_POST['Message'];
    
    
    $stmt = $con->prepare("INSERT INTO messages (uid, name, email, phone, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $uid, $name, $email, $phone, $message);
  
    if ($stmt->execute()) {
      $stmt->close();
      $msg = "<p class='alert alert-success'>Message Sent Successfully</p>";
      echo $msg;
    } else {
      $errorMessage = "Error: " . $stmt->error;
      $stmt->close();
      echo "<p class='alert alert-danger'>$errorMessage</p>";
    }
  
    mysqli_close($con); // Close connection after use
  }
  
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
<meta name="description" content="Homex template">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/fev.ico">


<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>Homex - Real Estate Template</title>
</head>
<body>





<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<?php
						$id=$_REQUEST['id']; 

						$query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.id='$id'AND user.uid=property.sid");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
                                    <div class="container">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>

                                            <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="data:<?php echo $row['image_type']; ?>;base64,<?php echo base64_encode($row['image1']); ?>" alt="land 1" class="img-fluid"> </div>
                                            <div class="item">
                                                <img src="data:<?php echo $row['image_type']; ?>;base64,<?php echo base64_encode($row['image2']); ?>" alt="land 2" class="img-fluid">
                                            </div>
                                            <div class="item">
                                                <img src="data:<?php echo $row['image_type']; ?>;base64,<?php echo base64_encode($row['image3']); ?>" alt="land 3" class="img-fluid">
                                            </div>
                                            </div>

                                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        </div>


                            
                        <div class="property-details">
                        
                            <h4 class="text-secondary my-4">Description</h4>
                            <p><?php echo $row['1'];?></p>
                            
                            <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td>Seller :</td>
                                            <td class="text-capitalize"><?php echo $row['uname'];?></td>
                                            <td>Property Type :</td>
                                            <td class="text-capitalize"><?php echo $row['type'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Size :</td>
                                            <td class="text-capitalize"><?php echo $row['size'];?> Sqft</td>
                                            <td>Price</td>
                                            <td class="text-capitalize">₹ <?php echo $row['price'];?></td>
                                        </tr>
                                        <tr>
                                            <td>City :</td>
                                            <td class="text-capitalize"><?php echo $row['city'];?></td>
                                            <td>State :</td>
                                            <td class="text-capitalize"><?php echo $row['address'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5 mb-4 text-secondary">Features</h5>
                            <div class="row">
								<?php echo $row['17'];?>
								
                            </div>   
							
                            

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Agent</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <!--check -->
                                    
                                   <div class="col-sm-4 col-lg-3"> <img src="data:<?php echo $row['image_type1']; ?>;base64,<?php echo base64_encode($row['uimage']); ?>" alt="Portfolio Image" height="200" width="170"></div>

                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-primary text-capitalize"><?php echo $row['uname'];?></h6>
                                            <ul class="mb-3">
			   
			   
                                                <?php $_SESSION['agentid']=$row['uid'];?>

                                                <li><?php echo $row['uphone'];?></li>
                                                <li><?php echo $row['uemail'];?></li>
                                            </ul>
                                            
                                            <div class="mt-3 text-secondary hover-text-primary">
                                                <ul>
                                                    <li class="float-left mr-3"><a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="float-left mr-3"><a href="www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php } ?>
                       
                        

                
                                    <div class="col-md-12 col-lg-12">
                                        <form class="bg-gray-form mt-5" action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control bg-gray" id="name" name="firstname" placeholder="Name" type="text" Required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control bg-gray" id="email" name="Email" placeholder="Email" type="text" Required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control bg-gray" id="phone" name="Phone" placeholder="Phone" type="text" Required>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control bg-gray mt-sm-20" id="massage" name="Message" cols="30" rows="7" placeholder="Massage" Required></textarea>
                                                            </div>
                                                            <div class="col-md-12">
                                                            <button type="submit" id="send" value="submit" name="submit" class="btn btn-primary">Send Msg</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					

                  
					
                    <div class="col-lg-4">
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-md-50">Send Message</h4>
                        <form method="get" action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="name" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="email" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone"  placeholder="Enter Phone">
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
										<textarea class="form-control" name="message" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
								
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <button type="button" name="add" class="btn btn-primary w-100">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
                        <form class="d-inline-block w-100" action="calc.php" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" name="amount" placeholder="Property Price" Required>
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Year" Required>
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate" Required>
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-primary mt-4">Calclute Instalment</button>
                        </form>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recent Property Add</h4>
                            <ul class="property_list_widget">
							
                          
                                <?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 3");
										while($row=mysqli_fetch_array($query))
										{
                                            //$imageData = base64_encode($row['image1']);
								?>
                                <li>
                                    <img src="data:<?php echo $row['image_type']; ?>;base64,<?php echo base64_encode($row['image1']); ?>" alt="Portfolio Image">

                                    <h6 class="text-secondary hover-text-primary text-capitalize"><a href="propertydetail.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> <?php echo $row['date'];?></span>
                                    
                                </li>
                                <?php } ?>





                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 



<!--jQuery Layer Slider
<script src="js/popper.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/wow.js"></script> 

<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/greensock.js"></script> 

<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script> 
 --> 

</body>

</html>