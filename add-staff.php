<?php
require_once('includes/functions.php');
dbconnect();
session_start();

$user = $_SESSION['username'];
$usid = $pdo->query("SELECT id FROM users WHERE username='".$user."'");
$usid = $usid->fetch(PDO::FETCH_ASSOC);
$uid = $usid['id'];

if (!is_user()) {
	redirect('login.php');
}elseif (isset($_POST['submit'])) {
	$fullname = htmlspecialchars($_POST["fullname"]);
	$address = htmlspecialchars($_POST["address"]);
	$phonenumber = htmlspecialchars($_POST["phone"]);
	$sex = htmlspecialchars($_POST["sex"]);
	$email = htmlspecialchars($_POST["email"]);
	$city = htmlspecialchars($_POST["city"]);
	$comment = htmlspecialchars($_POST["comment"]);
	$sex = htmlspecialchars($_POST['sex']);

	add_customer($fullname,$address,$phonenumber,$sex,$email,$city,$comment,$successful);
}

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Add Staff</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/project.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu content-detached-right-sidebar   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="content-detached-right-sidebar">

    <!-- BEGIN: Header-->
    <?php include_once("includes/header.php"); ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include_once("includes/sidebar.php"); ?>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    	<div class="app-content content">
		<div class="content-header row">
			<div class="content-header-light col-12">
				<div class="row">
					<div class="content-header-left col-md-9 col-12 mb-2">
						<h3 class="content-header-title">Add Staff</h3>
						<div class="row breadcrumbs-top">
							<div class="breadcrumb-wrapper col-12">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a>
									</li>
									<li class="breadcrumb-item"><a href="all-staff.php">Staff</a>
									</li>
									<li class="breadcrumb-item"><a href="add-staff.php">Add Staff</a>
									</li>									
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-body">
				<!-- Basic form layout section start -->
				<section id="basic-form-layouts">
					<div class="row match-height">
						<div class="col-md-11">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-icons">Add Staff</h4>
									<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
									<div class="heading-elements">
										<ul class="list-inline mb-0">
											<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
											<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
											<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
											<li><a data-action="close"><i class="ft-x"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="card-content collapse show">
									<div class="card-body">
										<form method="post" class="form">
											<div class="form-body">
												<div class="form-group">
                              <label for="designation">Staff Designation</label>
                              <select id="designation" name="designation" class="form-control">
                                <option value="none" selected="" disabled="">Select Staff Designation</option>
                               
                                <option value="0">Mr. Mushe</option>
                                <option value="1">Vendetta 1</option>
                                
                              </select>
                        </div>
												<div class="form-group">
													<label for="fullname">Full Name</label>
													<div class="position-relative has-icon-left">
														<input required type="text" id="fullname" class="form-control" placeholder="customer name" name="fullname">
														<div class="form-control-position">
															<i class="ft-user"></i>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="address">Address</label>
													<div class="position-relative has-icon-left">
														<input required type="text" id="address" class="form-control" placeholder="customer address" name="address">
														<div class="form-control-position">
															<i class="la la-map-marker"></i>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="phone">Phone Number</label>
													<div class="position-relative has-icon-left">
														<input required type="text" id="phone" class="form-control" name="phone">
														<div class="form-control-position">
															<i class="ft-phone"></i>
														</div>
													</div>
												</div>
												
												<div class="form-group">
												<label>Salary</label>
												<div class="input-group mt-0">
												<div class="input-group-prepend">
												<span class="input-group-text">$</span>
										</div>
										<input type="number" class="form-control" placeholder="Salary" name="salary">
										<div class="input-group-append">
											<span class="input-group-text">.00</span>
										</div>
									</div>
								</div>												
                        
											</div>
											<div class="form-actions">
												<button name="submit" type="submit" class="btn btn-primary block">
													<i class="la la-check-square-o"></i> Submit
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- // Basic form layout section end -->
			</div>
		</div>
	</div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <?php include_once("includes/customizer.php"); ?>
    <!-- End: Customizer-->

    <!-- BEGIN: Footer-->
    <?php include_once("includes/footer.php"); ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/project-summary.min.js"></script>
    <script src="app-assets/js/scripts/pages/project-summary-bug.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>
