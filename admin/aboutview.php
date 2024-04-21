<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM Homes | About</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
	
		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">View About</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">View About</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">About</h4>
									<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];
											
											
											?>
												
									
								
															<main class="container py-4">
																<div class="row">
																<div class="col-md-6">
																	<img src="../photos\logo1.jpeg" alt="Company Image" class="img-fluid rounded">
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
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
