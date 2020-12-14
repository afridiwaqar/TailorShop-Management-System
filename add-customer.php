<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Project Summary</title>
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
						<h3 class="content-header-title">Basic Forms</h3>
						<div class="row breadcrumbs-top">
							<div class="breadcrumb-wrapper col-12">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a>
									</li>
									<li class="breadcrumb-item"><a href="#">Form Layouts</a>
									</li>
									<li class="breadcrumb-item active">Basic Forms
									</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="content-header-right col-md-3 col-12">
						<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
							<button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
							<div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item" href="component-progress.html"> Progress</a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
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
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-form">Project Info</h4>
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
										<div class="card-text">
											<p>This is the most basic and default form having form sections. To add form section use <code>.form-section</code> class with any heading tags. This form has the buttons on the bottom left corner which is the default position.</p>
										</div>
										<form class="form">
											<div class="form-body">
												<h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="projectinput1">First Name</label>
															<input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="projectinput2">Last Name</label>
															<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="projectinput3">E-mail</label>
															<input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="projectinput4">Contact Number</label>
															<input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
														</div>
													</div>
												</div>
												<h4 class="form-section"><i class="la la-paperclip"></i> Requirements</h4>
												<div class="form-group">
													<label for="companyName">Company</label>
													<input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="projectinput5">Interested in</label>
															<select id="projectinput5" name="interested" class="form-control">
																<option value="none" selected="" disabled="">Interested in</option>
																<option value="design">design</option>
																<option value="development">development</option>
																<option value="illustration">illustration</option>
																<option value="branding">branding</option>
																<option value="video">video</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="projectinput6">Budget</label>
															<select id="projectinput6" name="budget" class="form-control">
																<option value="0" selected="" disabled="">Budget</option>
																<option value="less than 5000$">less than 5000$</option>
																<option value="5000$ - 10000$">5000$ - 10000$</option>
																<option value="10000$ - 20000$">10000$ - 20000$</option>
																<option value="more than 20000$">more than 20000$</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Select File</label>
													<label id="projectinput7" class="file center-block">
														<input type="file" id="file">
														<span class="file-custom"></span>
													</label>
												</div>
												<div class="form-group">
													<label for="projectinput8">About Project</label>
													<textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
												</div>
											</div>
											<div class="form-actions">
												<button type="button" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Cancel
												</button>
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-colored-form-control">User Profile</h4>
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
										<div class="card-text">
											<p>You can always change the border color of the form controls using <code>border-*</code> class. In this example we have user <code>border-primary</code> class for form controls. Form action buttons are on the bottom right position.</p>
										</div>
										<form class="form">
											<div class="form-body">
												<h4 class="form-section"><i class="la la-eye"></i> About User</h4>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="userinput1">Fist Name</label>
															<input type="text" id="userinput1" class="form-control border-primary" placeholder="Name" name="name">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="userinput2">Last Name</label>
															<input type="text" id="userinput2" class="form-control border-primary" placeholder="Company" name="company">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="userinput3">Username</label>
															<input type="text" id="userinput3" class="form-control border-primary" placeholder="Username" name="username">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="userinput4">Nick Name</label>
															<input type="text" id="userinput4" class="form-control border-primary" placeholder="Nick Name" name="nickname">
														</div>
													</div>
												</div>
												<h4 class="form-section"><i class="ft-mail"></i> Contact Info & Bio</h4>
												<div class="form-group">
													<label for="userinput5">Email</label>
													<input class="form-control border-primary" type="email" placeholder="email" id="userinput5">
												</div>
												<div class="form-group">
													<label for="userinput6">Website</label>
													<input class="form-control border-primary" type="url" placeholder="http://" id="userinput6">
												</div>
												<div class="form-group">
													<label>Contact Number</label>
													<input class="form-control border-primary" id="userinput7" type="tel" placeholder="Contact Number">
												</div>
												<div class="form-group">
													<label for="userinput8">Bio</label>
													<textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Bio"></textarea>
												</div>
											</div>
											<div class="form-actions text-right">
												<button type="button" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Cancel
												</button>
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row match-height">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-tooltip">Issue Tracking</h4>
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
										<div class="card-text">
											<p>This form shows tooltips on hover to provide useful information while user is filling the form. Use data attributes like toggle <code>data-toggle</code>, trigger <code>data-trigger</code>, placement <code>data-placement</code>, title <code>data-title</code> to show tooltips on form controls.</p>
										</div>
										<form class="form">
											<div class="form-body">
												<div class="form-group">
													<label for="issueinput1">Issue Title</label>
													<input type="text" id="issueinput1" class="form-control" placeholder="issue title" name="issuetitle" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title">
												</div>
												<div class="form-group">
													<label for="issueinput2">Opened By</label>
													<input type="text" id="issueinput2" class="form-control" placeholder="opened by" name="openedby" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By">
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="issueinput3">Date Opened</label>
															<input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Opened">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="issueinput4">Date Fixed</label>
															<input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Fixed">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="issueinput5">Priority</label>
													<select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority">
														<option value="low">Low</option>
														<option value="medium">Medium</option>
														<option value="high">High</option>
													</select>
												</div>
												<div class="form-group">
													<label for="issueinput6">Status</label>
													<select id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
														<option value="not started">Not Started</option>
														<option value="started">Started</option>
														<option value="fixed">Fixed</option>
													</select>
												</div>
												<div class="form-group">
													<label for="issueinput8">Comments</label>
													<textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="comments" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Comments"></textarea>
												</div>
											</div>
											<div class="form-actions">
												<button type="button" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Cancel
												</button>
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-icons">Timesheet</h4>
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
										<div class="card-text">
											<p>This form shows the use of icons with form controls. Define the position of the icon using <code>has-icon-left</code> or <code>has-icon-right</code> class. Use <code>icon-*</code> class to define the icon for the form control. See Icons sections for the list of icons you can use. </p>
										</div>
										<form class="form">
											<div class="form-body">
												<div class="form-group">
													<label for="timesheetinput1">Employee Name</label>
													<div class="position-relative has-icon-left">
														<input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
														<div class="form-control-position">
															<i class="ft-user"></i>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="timesheetinput2">Project Name</label>
													<div class="position-relative has-icon-left">
														<input type="text" id="timesheetinput2" class="form-control" placeholder="project name" name="projectname">
														<div class="form-control-position">
															<i class="la la-briefcase"></i>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="timesheetinput3">Date</label>
													<div class="position-relative has-icon-left">
														<input type="date" id="timesheetinput3" class="form-control" name="date">
														<div class="form-control-position">
															<i class="ft-message-square"></i>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Rate Per Hour</label>
													<div class="input-group mt-0">
														<div class="input-group-prepend">
															<span class="input-group-text">$</span>
														</div>
														<input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)" name="rateperhour">
														<div class="input-group-append">
															<span class="input-group-text">.00</span>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="timesheetinput5">Start Time</label>
															<div class="position-relative has-icon-left">
																<input type="time" id="timesheetinput5" class="form-control" name="starttime">
																<div class="form-control-position">
																	<i class="ft-clock"></i>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="timesheetinput6">End Time</label>
															<div class="position-relative has-icon-left">
																<input type="time" id="timesheetinput6" class="form-control" name="endtime">
																<div class="form-control-position">
																	<i class="ft-clock"></i>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="timesheetinput7">Notes</label>
													<div class="position-relative has-icon-left">
														<textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
														<div class="form-control-position">
															<i class="ft-file"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="form-actions right">
												<button type="button" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Cancel
												</button>
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row match-height">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-round-controls">Complaint Form</h4>
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
										<div class="card-text">
											<p>This is a variation to the default form control styling. In this example all the form controls has round styling. To apply round style add class <code>round</code> to any form control.</p>
										</div>
										<form class="form">
											<div class="form-body">
												<div class="form-group">
													<label for="complaintinput1">Company Name</label>
													<input type="text" id="complaintinput1" class="form-control round" placeholder="company name" name="companyname">
												</div>
												<div class="form-group">
													<label for="complaintinput2">Employee Name</label>
													<input type="text" id="complaintinput2" class="form-control round" placeholder="employee name" name="employeename">
												</div>
												<div class="form-group">
													<label for="complaintinput3">Date of Complaint</label>
													<input type="date" id="complaintinput3" class="form-control round" name="complaintdate">
												</div>
												<div class="form-group">
													<label for="complaintinput4">Supervisor's Name</label>
													<input type="text" id="complaintinput4" class="form-control round" placeholder="supervisor name" name="supervisorname">
												</div>
												<div class="form-group">
													<label for="complaintinput5">Complaint Details</label>
													<textarea id="complaintinput5" rows="5" class="form-control round" name="complaintdetails" placeholder="details"></textarea>
												</div>
												<div class="form-group">
													<label for="complaintinput6">Signature</label>
													<input type="text" id="complaintinput6" class="form-control round" placeholder="signature" name="signature">
												</div>
											</div>
											<div class="form-actions">
												<button type="button" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Cancel
												</button>
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-square-controls">Donation</h4>
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
										<div class="card-text">
											<p>This is another variation to the default form control styling. In this example all the form controls has square styling. To apply square style add class <code>square</code> to any form control.</p>
										</div>
										<form class="form">
											<div class="form-body">
												<div class="form-group">
													<label for="donationinput1">Full Name</label>
													<input type="text" id="donationinput1" class="form-control square" placeholder="name" name="fullname">
												</div>
												<div class="form-group">
													<label for="donationinput2">Email</label>
													<input type="email" id="donationinput2" class="form-control square" placeholder="email" name="email">
												</div>
												<div class="form-group">
													<label for="donationinput3">Contact Number</label>
													<input type="tel" id="donationinput3" class="form-control square" name="contact">
												</div>
												<div class="form-group">
													<label for="donationinput4">Dontaion Type</label>
													<input type="text" id="donationinput4" class="form-control square" placeholder="type of donation" name="donationtype">
												</div>
												<div class="form-group">
													<label>Amount</label>
													<div class="input-group mt-0">
														<div class="input-group-prepend">
															<span class="input-group-text">$</span>
														</div>
														<input type="text" class="form-control square" placeholder="amount" aria-label="Amount (to the nearest dollar)" name="amount">
														<div class="input-group-append">
															<span class="input-group-text">.00</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="donationinput7">Comments</label>
													<textarea id="donationinput7" rows="5" class="form-control square" name="comments" placeholder="comments"></textarea>
												</div>
											</div>
											<div class="form-actions right">
												<button type="button" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Cancel
												</button>
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row match-height">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-form-center">Event Registration</h4>
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
										<div class="card-text">
											<p>This example shows a way to center your form in the card. Here we have used <code>col-md-6 ml-auto</code> classes to center the form in a full width card. User can always change those classes according to width and offset requirements. This example also uses form action buttons in the center bottom position of the card.</p>
										</div>
										<form class="form">
											<div class="row justify-content-md-center">
												<div class="col-md-6">
													<div class="form-body">
														<div class="form-group">
															<label for="eventInput1">Full Name</label>
															<input type="text" id="eventInput1" class="form-control" placeholder="name" name="fullname">
														</div>
														<div class="form-group">
															<label for="eventInput2">Title</label>
															<input type="text" id="eventInput2" class="form-control" placeholder="title" name="title">
														</div>
														<div class="form-group">
															<label for="eventInput3">Company</label>
															<input type="text" id="eventInput3" class="form-control" placeholder="company" name="company">
														</div>
														<div class="form-group">
															<label for="eventInput4">Email</label>
															<input type="email" id="eventInput4" class="form-control" placeholder="email" name="email">
														</div>
														<div class="form-group">
															<label for="eventInput5">Contact Number</label>
															<input type="tel" id="eventInput5" class="form-control" name="contact" placeholder="contact number">
														</div>
														<div class="form-group">
															<label>Existing Customer</label>
															<div class="input-group">
																<div class="d-inline-block custom-control custom-radio mr-1">
																	<input type="radio" name="customer1" class="custom-control-input" id="yes">
																	<label class="custom-control-label" for="yes">Yes</label>
																</div>
																<div class="d-inline-block custom-control custom-radio">
																	<input type="radio" name="customer1" class="custom-control-input" id="no">
																	<label class="custom-control-label" for="no">No</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-actions text-center">
												<button type="button" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Cancel
												</button>
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-md-center">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="basic-layout-card-center">Event Registration</h4>
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
										<div class="card-text">
											<p>This example shows a ways to center your card with form. Here we have used <code>col-md-6 ml-auto</code> classes to center the card as its not full width. User can always change those classes according to width and offset requirements. This example also uses form action buttons in the center bottom position of the card.</p>
										</div>
										<form class="form">
											<div class="form-body">
												<div class="form-group">
													<label for="eventRegInput1">Full Name</label>
													<input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
												</div>
												<div class="form-group">
													<label for="eventRegInput2">Title</label>
													<input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
												</div>
												<div class="form-group">
													<label for="eventRegInput3">Company</label>
													<input type="text" id="eventRegInput3" class="form-control" placeholder="company" name="company">
												</div>
												<div class="form-group">
													<label for="eventRegInput4">Email</label>
													<input type="email" id="eventRegInput4" class="form-control" placeholder="email" name="email">
												</div>
												<div class="form-group">
													<label for="eventRegInput5">Contact Number</label>
													<input type="tel" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
												</div>
												<div class="form-group">
													<label>Existing Customer</label>
													<div class="input-group">
														<div class="d-inline-block custom-control custom-radio mr-1">
															<input type="radio" name="customer2" class="custom-control-input" id="yes1">
															<label class="custom-control-label" for="yes1">Yes</label>
														</div>
														<div class="d-inline-block custom-control custom-radio">
															<input type="radio" name="customer2" class="custom-control-input" id="no1">
															<label class="custom-control-label" for="no1">No</label>
														</div>
													</div>
												</div>
											</div>
											<div class="form-actions center">
												<button type="button" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Cancel
												</button>
												<button type="submit" class="btn btn-primary">
													<i class="la la-check-square-o"></i> Save
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
