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
  }

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Add Expense</title>
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
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Add Expense</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="all-expenses.php">Expenses</a>
                </li>
                <li class="breadcrumb-item active">Add Expense
                </li>
              </ol>
            </div>
          </div>
        </div>
        
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
<?php

if(isset($_POST['add_expense'])){
	$expcat = $_POST["expcat"];
	$desc = $_POST["desc"];
	$date = $_POST["date"];
	$amount = $_POST["amount"];
	$error = 0;

	if($expcat==0){
		$err1=1;
	}
	if(isset($err1))
	 $error = $err1;;
	if (!isset($error) || $error == 0){
		$res = $pdo->exec("INSERT INTO expense SET expcat='".$expcat."', description='".$desc."', date='".$date."', amount='".$amount."'");
		if($res){
			echo "<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	
			Expense Added Successfully!
			</div>";
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	
			Some Problem Occurs, Please Try Again. 
			</div>";
		}
	}elseif (!isset($err1) || $err1 == 1){
		echo "<div class='alert alert-danger alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

		Please select a Category!!!!

		</div>";
	}	
} 
?>
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls">Adding Expense Form</h4>
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
                    <form method="Post" class="form" validate>
                      <div class="form-body">
                      	<div class="form-group">
                              <label for="expcat">Select Customer</label>
                              <select id="expcat" name="expcat" class="form-control round">
                                <option value="none" selected="" disabled="">Please Select a Category</option>
                               <?php
					$ddaa = $pdo->query("SELECT id, title FROM expcat ORDER BY id");
					    while ($data = $ddaa->fetch(PDO::FETCH_ASSOC))
					    {									
					 echo "<option value='$data[id]'>$data[title]</option>";
						}
					?>
                              </select>
                        </div>
                        
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea id="description" rows="3" class="form-control round" name="desc" placeholder="description"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="date">Date </label>
                          <input type="date" id="date" class="form-control round" name="date">
                        </div>
                       
                        <div class="form-group">
												<label>Amount</label>
												<div class="input-group mt-0">
												<div class="input-group-prepend">
												<span class="input-group-text">$</span>
										</div>
										<input type="number" id="amount" class="form-control round" placeholder="enter the amount" name="amount">
										<div class="input-group-append">
											<span class="input-group-text">.00</span>
										</div>
									</div>
								</div>
                        
                      <div class="form-actions">
                        <button name="add_expense" type="submit" class="btn btn-primary block">
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