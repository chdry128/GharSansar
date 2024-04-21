<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

//// code insert
//// add code

$msg="";
if(isset($_POST['add']))
{
	$pid=$_REQUEST['id'];
	
	$title=$_POST['title'];
	$ptype=$_POST['ptype'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	$asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$state=$_POST['state'];
	$status=$_POST['status'];
	$uid=$_SESSION['uid'];

	$aimage=$_FILES['aimage']['tmp_name'];
	$image1 = file_get_contents($aimage);
	$Fphoto1= $con->real_escape_string($image1);
	$type= $_FILES['aimage']['type'];

	$aimage2=$_FILES['aimage2']['tmp_name'];
	$image2= file_get_contents($aimage2);
	$Fphoto2= $con->real_escape_string($image2);
	$type2 = $_FILES['aimage2']['type'];

	$aimage4=$_FILES['aimage4']['tmp_name'];
	$image3= file_get_contents($aimage4);
	$Fphoto4= $con->real_escape_string($image3);
	$type4 = $_FILES['aimage4']['type'];
	
	
	$sql = "UPDATE property SET title= '{$title}',  type='{$ptype}',  selling_type='{$ptype}', 
	size='{$asize}', price='{$price}', address='{$loc}', city='{$city}', state='{$state}',city='{$city}',status='{$status}',sid='{$uid}',
	image1='{$Fphoto1}', image2='{$Fphoto2}', image3='{$Fphoto4}' WHERE id = {$pid}";
	
	$result=mysqli_query($con,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Property Updated</p>";
		header("Location:feature.php?msg=$msg");
	}
	else{
		$msg="<p class='alert alert-warning'>Property Not Updated</p>";
		header("Location:feature.php?msg=$msg");
	}
}						
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/fev.ico">
<?php include ('try.php'); ?>
<title>Homex - Real Estate Template</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
		<?php include("include/header.php");?>
     
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">
								
								<?php
									
									$pid=$_REQUEST['id'];
									$query=mysqli_query($con,"select * from property where id='$pid'");
									while($row=mysqli_fetch_row($query))
									{
								?>
												
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required value="<?php echo $row['1']; ?>">
													</div>
												</div>
												
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="ptype">
															<option value="">Select Type</option>
															<option value="appartment">Land</option>
															<option value="house">House</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Select Status</option>
															<option value="rent">Rent</option>
															<option value="sale">Sale</option>
														</select>
													</div>
												</div>
												
												
											</div>   

											</div>
										</div>
										<h5 class="text-secondary">Price & Location</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required value="<?php echo $row['4']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" required value="<?php echo $row['5']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required value="<?php echo $row['6']; ?>">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize" required value="<?php echo $row['7']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc" required value="<?php echo $row['8']; ?>">
													</div>
												</div>
												
											</div>
										</div>
										
										
												
										<h5 class="text-secondary">Image & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" required="">
														<img src="data:<?php echo $row['10']; ?>;base64,<?php echo base64_encode($row['9']); ?>" alt="Portfolio Image">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required="">
														<img src="data:<?php echo $row['10']; ?>;base64,<?php echo base64_encode($row['11']); ?>" alt="Portfolio Image">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" required="">
														<img src="data:<?php echo $row['10']; ?>;base64,<?php echo base64_encode($row['12']); ?>" alt="Portfolio Image">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>
												
											</div>
											
										</div>

										
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
									</div>
								</form>
							<?php
								} 
							?>
                    </div>            
            </div>
        </div>
		<?php include("include/footer.php");?>
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>
</body>
</html>