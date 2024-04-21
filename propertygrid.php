<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Homex template">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Grid</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property Grid</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<div class="col-lg-8">
                        <div class="row">
						
							<?php 
							
							if(isset($_REQUEST['filter']))
							{
								//$type=$_REQUEST['type'];
								$stype=$_REQUEST['stype'];
								$city=$_REQUEST['city'];
								
								$sql="SELECT * FROM property WHERE selling_type='{$stype}' and city='{$city}'";     
								
								$result=mysqli_query($con,$sql);
							
								if(mysqli_num_rows($result)>0)
								{
									if($result == true)
									{
                                      // Assuming JPEG format


										while($row=mysqli_fetch_array($result))
										{
							?><?php
									   //$image_data = base64_encode($row['18']);
                                        //$data_uri = "data:image/jpeg;base64," . $image_data;?>
                            <div class="col-md-6">
                                <div class="featured-thumb hover-zoomer mb-4">
                                    <?php    
                                        $imageSource = "data:image/jpeg;base64," . base64_encode($row['image2']);
                                            echo "<img src=\"$imageSource\" alt=\"Image from ac\">";
                                    ?>
                                    <!--<div class="overlay-black overflow-hidden position-relative"> <img src="..... //echo "data:image/jpeg,base64,".base64_encode($row['image1']); ?>" alt="Image from BLOB">-->
                                        
                                        <div class="sale bg-secondary text-white">For <?php echo $row['3'];?></div>
                                        <div class="price text-primary text-capitalize">$ :<?php echo $row['4'];?> <span class="text-white"><?php echo $row['7'];?> Sqft</span></div>
                                        
                                    </div>
                                    <div class="featured-thumb-data shadow-one">
                                        <div class="p-4">
                                            <h5 class="text-secondary hover-text-primary mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                            <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $row['14'];?></span> </div>
                                        <div class="px-4 pb-4 d-inline-block w-100">
                                            <div class="float-left text-capitalize"><i class="fas fa-user text-primary mr-1"></i>By : <?php echo $row['uname'];?></div>
                                            <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i><?php echo $row['date']?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 		
										} 
					
									}
								}
								else {
									
									echo "<h1 class='mb-5'><center>No Property Available</center></h1>";
								}
									
							}
							?>
                        </div>
                    </div>
					
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
						<form class="d-inline-block w-100" action="calc.php" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" name="amount" placeholder="Property Price">
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Year">
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-primary mt-4">Calclute Instalment</button>
                        </form>
                        </div>
                        
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

		<?php include("include/footer.php");?>
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>
</body>

</html>