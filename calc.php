<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

// codeing

if(isset($_REQUEST['calc']))
{
	$amount=$_REQUEST['amount'];
	$mon=$_REQUEST['month'];
	$int=$_REQUEST['interest'];
	
	$interest = $amount * $int/100;
	$pay = $amount + $interest;
	$month = $pay / $mon;

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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>User Listed Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Listed Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row bg-gray">
            <div class="container">
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">EMI Calculator</h2>
                        </div>
					</div>
					<center>
					<table class="items-list col-lg-6" style="border-collapse:inherit;">
                        <thead>
                             <tr  class="bg-primary">
                                <th class="text-white font-weight-bolder">Price</th>
                                <th class="text-white font-weight-bolder">Amount</th>
                             </tr>
                        </thead>
                        <tbody>

                            <tr class="text-center font-18">
                                <td><b>Enter Amount</b></td>
                                <td><b><?php echo $amount ; ?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Enter Month</b></td>
                                <td><b><?php echo $mon ; ?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Enter Interest Rate</b></td>
                                <td><b><?php echo $int ; ?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Total Interest</b></td>
                                <td><b><?php echo $interest ; ?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Total Amount</b></td>
                                <td><b><?php echo $pay ; ?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Pay Per Month (EMI)</b></td>
                                <td><b><?php echo $month ; ?></b></td>
                            </tr>
							
                        </tbody>
                    </table> 
					</center>
            </div>
        </div>
		<?php include("include/footer.php");?>
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>
</body>
</html>