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
        <title>GharSansar- Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/fev.ico">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
    </head>
    <body>
	
		<!-- Main Wrapper -->

		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Header -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<p></p>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-light"
											 <i> <a  href="userlist.php" class="fa fa-users"> </a> </i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										<?php
										include"config.php";
										$query=mysqli_query($con,"select count(uid) from user");
										while($row=mysqli_fetch_array($query)){
											$total=$row['0'];
											echo "<h3>$total</h3>";
										}


										?>

										
										<h3><?php $total;?></h3>
										
										<a href="userlist.php" class="text-muted">Users</a>

										<div class="progress progress-sm">
											<div class="progress-bar bg-primary" style="width: <?php echo $total; ?>%"></div>

										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-light">
											<i><a href="propertyview.php" class="fa fa-map"></a></i>

										</span>
										
									</div>
									<div class="dash-widget-info">
										<?php
										include "config.php";
										$query=mysqli_query($con,"select count(id) from property");
										while($row=mysqli_fetch_array($query)){
											$total=$row['0'];
											echo "<h3>$total</h3>";
										}
										?>

										
										
										<a href="propertyview.php" class="text-muted">Property</a>

										<div class="progress progress-sm">
											<div class="progress-bar bg-primary" style="width: <?php echo $total; ?>%"></div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-light">
											<i> <a href="feedbackview.php"  class="fa fa-comment"> </a></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										<?php
										include"config.php";
										$query=mysqli_query($con,"select count(fid) from feedback");
										while($row=mysqli_fetch_array($query)){
											$total=$row['0'];
											echo "<h3>$total</h3>";

										}
										?>
										
										
										<h6 class="text-muted">Feedback</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary" style="width: <?php echo $total; ?>%"></div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-light">
											<i> <a href="contactview.php" class="fa fa-users"> </a> </i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<?php
									include"config.php";
									$query=mysqli_query($con,"select count(cid) from contact");
										while($row=mysqli_fetch_array($query)){
											$total=$row['0'];
											echo "<h3>$total</h3>";
										}
									?>
										
										<h6 class="text-muted">Contact Message</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary" style="width: <?php echo $total; ?>%"></div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>			
			</div>
			<!-- /Page Wrapper -->
		

		<!-- /Main Wrapper -->
		<script src="assets/js/jquery-3.2.1.min.js"></script>
		<script  src="assets/js/script.js"></script>

    </body>

</html>
