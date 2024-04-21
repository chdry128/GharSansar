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
<meta name="description" content="Homex template">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/fev.ico">


<!-- Css Link -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Title -->
<title>Homex - Real Estate Template</title>
</head>
<body>

<!--	Page Loader -->
<!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div> -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('photos/login1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>About US</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
        <!--	About Our Company -->
        <div class="full-row">
            <div class="container">
                
	

                            <main class="container py-4">
                                <div class="row">
                                <div class="col-md-6">
                                    <img src="photos\logo1.jpeg" alt="Company Image" class="img-fluid rounded">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div>
                                    <h2>About Us</h2>
                                    <p class=" text-warning  font-weight-bold ">
                                    At GharSansar, we understand the unique needs of land buyers and sellers.
                                     We're passionate about helping you navigate the complexities of the land market, from rural acreage to development opportunities.</p>
                                     <p class=" font-weight-bold  text-primary" >  Our team of experienced agents possesses a deep understanding of local land values, zoning regulations, and market trends. 
                                        We leverage this knowledge to ensure you get the best possible outcome in your land transaction.</p>
                                    <p class=" text-info font-weight-bold " >We believe in building trust and long-lasting relationships with our clients.
                                         We'll work closely with you to understand your specific needs and goals, and provide personalized guidance throughout the entire process.
                                            </p>    
                                    </p>
                                    </div>
                                </div>
                                </div>
                                <hr>

                                <div class="row">
                                <div class="col-md-4">
                                    <h3>Our Team</h3>
                                    <p>
                                    Experienced Professionals (Deep Market Knowledge)
                                    Personalized Guidance (Client-Centric Approach)
                                    Proven Track Record (Successful Client Outcomes)
                                    </p>
                                    
                                </div>
                                <div class="col-md-4">
                                    <h3>Our Mission</h3>
                                    <p>
                                    Connecting Landowners (Buyers & Sellers)
                                    Simplifying Transactions (Streamlined Process)
                                    Building Trust (Transparency & Communication)
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h3>Our Values</h3>
                                  <p>
                                     Client Focus (Your Needs First)<br>
                                    Market Expertise (Informed Guidance)<br>
                                    Ethical Conduct (Transparency & Integrity)
                                </p>
                                </div>
                                </div>
                            </main>

                            <footer>
                                </footer>

                            </body>
                            </html>
   
				
            </div>
        </div>
        <!--	About Our Company -->        
        
       <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 


</body>

</html>