<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>  
  <div class="header">
	
					<div class="header-left">
					<div class="d-flex align-items-center">  <a href="dashboard.php" class="logo">
						<img src="assets/img/logo.jpeg" alt="Logo">
						</a>
						<span class="logo-text mt-2 fw-bold	 text-white"><h3>GharSansar</h3></span>
					</div>
					</div>

				

				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<ul class="nav user-menu">
					<h4 style="color:white;margin-top:13px;"><?php echo $_SESSION['auser'];?></h4>
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31" alt="profile"></span>
						</a>
						
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6><?php echo $_SESSION['auser'];?></h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">Profile</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>					
				</ul>
            </div>
            <div class="sidebar" id="sidebar">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span class="font-weight-bold">Main</span>
							</li>
							<li> 
								<a href="dashboard.php"><i class="fa fa-home"></i> <span>Dashboard</span></a>
							</li>
							
							<li class="menu-title"> 
								<span class="font-weight-bold">Authentication</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fa fa-check"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									<li><a href="logout.php"> Logout </a></li>
									<li><a href="profile.php"> Profile </a></li>


									
								</ul>
							</li>
							<li class="menu-title"> 
								<span class="font-weight-bold">Users</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fa fa-user"></i> <span> Users </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="adminlist.php"> Admin </a></li>
									<li><a href="userlist.php"> Users </a></li>
									
									
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span class="font-weight-bold">Property</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-map"></i> <span> Property</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="propertyadd.php"> Add Property</a></li>
									<li><a href="propertyview.php"> View Property </a></li>
									
								</ul>
							</li>
							
							
							<li class="menu-title"> 
								<span class="font-weight-bold" >Query</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-database"></i> <span> Query </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="contactview.php"> Contact </a></li>
									<li><a href="feedbackview.php"> Feedback </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span class="font-weight-bold">About</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-info-circle"></i> <span> About </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									
									<li><a href="aboutview.php"> About </a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
		
