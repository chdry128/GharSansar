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
$error="";
$msg="";
if(isset($_POST['add']))
{
	$sid=$_SESSION['uid'];
	$title=$_POST['title'];
	////$content=$_POST['content'];
	$ptype=$_POST['ptype'];
	$uname=$_POST['uname'];
	//$bhk=$_POST['bhk'];
	//$bed=$_POST['bed'];
	//$balc=$_POST['balc'];
	//$hall=$_POST['hall'];
	$stype=$_POST['stype'];
	//$bath=$_POST['bath'];
	//$kitc=$_POST['kitc'];
	//$floor=$_POST['floor'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	$asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$state=$_POST['state'];
	$status=$_POST['status'];
	//$uid=$_SESSION['uid'];
	//$feature=$_POST['feature'];
	
	//$totalfloor=$_POST['totalfl'];
	
	$aimage=$_FILES['aimage']['tmp_name'];
	$image1 = file_get_contents($aimage);
	$Fphoto1= $con->real_escape_string($image1);
	$type= $_FILES['aimage']['type'];



	//$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['tmp_name'];
	$image2= file_get_contents($aimage2);
	$Fphoto2= $con->real_escape_string($image2);
	$type2 = $_FILES['aimage2']['type'];



	//$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['tmp_name'];
	$image3= file_get_contents($aimage4);
	$Fphoto4= $con->real_escape_string($image3);
	$type4 = $_FILES['aimage4']['type'];



	
	
	
	
	$sql="insert into property (title,type,selling_type,price,city,state,size,address,image1,image_type,image2,image3,status,uname,sid)
	values('$title','$ptype','$stype','$price','$city','$state','$asize','$loc','$Fphoto1','$type','$Fphoto2','$Fphoto4','$status','$uname','$sid')";
	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Property Inserted Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Property Not Inserted Some Error</p>";
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
<script src='https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js'></script>
<script src='https://api.mapbox.com/geocoding/v5/?access_token=pk.eyJ1IjoiYXZheTEyOCIsImEiOiJjbHY2enR3MDMwNGpnMmlxeW52dTNyZW9rIn0.BtERjB3w6fgUXojpmlIl1w'></script>


<title>Homex - Real Estate Template</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
		<?php include("include/header.php");?>
                <div class="banner-full-row page-banner" style="background-image:url('photos/login1.jpg');">
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
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Title">
													</div>
												</div>
											
												
												<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Seller Name</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="uname" required placeholder="Enter Name">
													</div>
												</div>
											
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="ptype">
															<option value="">Select Type</option>
															
															<option value="Land">Land</option>
															
															<option value="House">House</option>
															
															
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
											
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required placeholder="Enter Price in Rupee">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" required placeholder="Enter City">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required placeholder="Enter State">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize" required placeholder="Enter Area Size (in sqrt)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc" required placeholder="Enter Address">
													</div>
												</div>

												<div id="mapContainer">
												<script src='https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js'></script>
<script src='https://api.mapbox.com/geocoding/v5/?access_token=pk.eyJ1IjoiYXZheTEyOCIsImEiOiJjbHY2enR3MDMwNGpnMmlxeW52dTNyZW9rIn0.BtERjB3w6fgUXojpmlIl1w'></script>
												<input type="text" id="landSearch" placeholder="Search for your land">
												<button id="searchButton">Search</button>


												</div>


												
												<script src='https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYXZheTEyOCIsImEiOiJjbHY2enR3MDMwNGpnMmlxeW52dTNyZW9rIn0.BtERjB3w6fgUXojpmlIl1w'; // Replace with your actual token
	

	const map = new mapboxgl.Map({
    container: 'mapContainer', // Reference the container element
    style: 'mapbox://styles/mapbox/streets-v11', // Replace with your desired style
    center: [-74.50, 40.7], // Initial center coordinates (example: New York City)
    zoom: 9 // Initial zoom level
});

//map
map.on('click', (event) => {
    const clickedLocation = event.lngLat; // Get clicked coordinates

    // Extract latitude and longitude
    const latitude = clickedLocation.lat;
    const longitude = clickedLocation.lng;

    // Store coordinates (e.g., in hidden form fields)
    document.getElementById('landLatitude').value = latitude;
    document.getElementById('landLongitude').value = longitude;
	console.log(`Latitude: ${latitude}, Longitude: ${longitude}`);


    // Optionally, add a marker at the clicked location
   // const marker = new mapboxgl.Marker({ color: 'red' })
        //.setLngLat(clickedLocation)
       // .addTo(map);
});

const searchButton = document.getElementById('searchButton');
searchButton.addEventListener('click', () => {
    const searchTerm = document.getElementById('landSearch').value;

    if (searchTerm) {
        mapboxgl.accessToken = 'pk.eyJ1IjoiYXZheTEyOCIsImEiOiJjbHY2enR3MDMwNGpnMmlxeW52dTNyZW9rIn0.BtERjB3w6fgUXojpmlIl1w';
        const geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            placeholder: 'Search for your land by address or location'
        });
        map.addControl(geocoder);

        geocoder.on('result', (ev) => {
            const coords = ev.result.geometry.coordinates;
            const latitude = coords[1];
            const longitude = coords[0];

            // Optionally, center the map on the searched location
            map.flyTo({ center: coords, zoom: 15 });

            // Optionally, add a marker at the searched location
            new mapboxgl.Marker()
                .setLngLat(coords)
                .addTo(map);
        });
    }
});




</script>
<form>
    <input type="hidden" id="landLatitude" name="landLatitude">
    <input type="hidden" id="landLongitude" name="landLongitude">
    <button type="submit">Submit</button>
</form>


											</div>
										</div>
										
										
												
										<h5 class="text-secondary">Image & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" accept="image/*" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" accept="image/*" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" accept="image/*" required="">
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
											

										
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
										
								</div>
								</form>
                    </div>            
            </div>
        </div></div>

		<?php include("include/footer.php");?>
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>
</body>
</html>