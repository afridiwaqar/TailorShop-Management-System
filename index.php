<?php 
	$currency = "GHC";
	require_once('includes/functions.php');
	dbconnect();
	session_start();

	if (!is_user()) {
		redirect('login.php');
	}

$user = $_SESSION['username'];
$usid = $pdo->query("SELECT id FROM users WHERE username='".$user."'");
$usid = $usid->fetch(PDO::FETCH_ASSOC);
$uid = $usid['id'];
 
$customerr = $pdo->query("SELECT COUNT(*) as sum FROM customer"); 
$orderr = $pdo->query("SELECT COUNT(*) as sum FROM `order`");
$incomee = $pdo->query("SELECT sum(amount) as sum FROM `income` WHERE date > DATE_SUB(NOW(), INTERVAL 30 DAY)");
$expensee = $pdo->query("SELECT sum(amount) as sum FROM `expense` WHERE date > DATE_SUB(NOW(), INTERVAL 30 DAY)");

$customer = $customerr->fetch(PDO::FETCH_ASSOC); 
$order = $orderr->fetch(PDO::FETCH_ASSOC);
$income = $incomee->fetch(PDO::FETCH_ASSOC);
$expense = $expensee->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>Dashboard </title>
	<link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/fonts/meteocons/style.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist.css">
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
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
	<link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.min.css">
	<!-- END: Page CSS-->
	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
	<!-- BEGIN: Header-->
	<?php include_once 'includes/header.php'; ?>
	<!-- END: Header-->
	<!-- BEGIN: Main Menu-->
	<?php include_once 'includes/sidebar.php'; ?>
	<!-- END: Main Menu-->
	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-header row">
			</div>
			<div class="content-body">
				<!-- cards statistic -->
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-12">
						<div class="card pull-up">
							<div class="card-content">
								<div class="card-body">
									<div class="media d-flex">
										<div class="media-body text-left">
											<h3 class="success">
												<?php echo $customer['sum'] ?>
											</h3>
											<h6>Total Customers!</h6>
										</div>
										<div>
											<i class="icon-users success font-large-2 float-right"></i>
										</div>
									</div>
									<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-12">
						<div class="card pull-up">
							<div class="card-content">
								<div class="card-body">
									<div class="media d-flex">
										<div class="media-body text-left">
											<h3 class="info">
												<?php echo $order['sum'] ?>
											</h3>
											<h6>Total Orders!</h6>
										</div>
										<div>
											<i class="icon-basket-loaded info font-large-2 float-right"></i>
										</div>
									</div>
									<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-12">
						<div class="card pull-up">
							<div class="card-content">
								<div class="card-body">
									<div class="media d-flex">
										<div class="media-body text-left">
											<h3 class="warning">
												<?php echo $currency.$income['sum'];?>
											</h3>
											<h6>Last 30 Days Income!</h6>
										</div>
										<div>
											<i class="icon-money warning font-large-2 float-right"></i>
										</div>
									</div>
									<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-12">
						<div class="card pull-up">
							<div class="card-content">
								<div class="card-body">
									<div class="media d-flex">
										<div class="media-body text-left">
											<h3 class="danger">
												<?php echo $currency.$expense['sum']; ?>
											</h3>
											<h6>Last 30 Days Expenses!</h6>
										</div>
										<div>
											<i class="icon-credit-card  danger font-large-2 float-right"></i>
										</div>
									</div>
									<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/  statistic -->
				<div class="row match-height">
					<div class="col-xl-12 col-lg-12">
						<div class="card">
								<div class="card-content ">
										<table class="table" width="100" border="1" cellspacing="0" cellpadding="0">
                          <tr>
                           <th scope="col">Income, Expenses and Profit for past 30 days</th>
                          </tr>
                          <tr>
                            <td><canvas id="myChart"></canvas></td>
                          </tr>  
                        </table>
										</div>
									</div>
								</div>
							</div>				
			</div>
		</div>
	</div>
	<!-- END: Content-->
	<?php
$income = '"'.income( date('m/d/Y', (strtotime(date('m/d/Y'))-((29*60*60*24)))),$pdo).'"';
$dates = '"'.date('Y-m-d', strtotime(date('Y-m-d')) - (20*60*60*24) ).'"';	
		
for ($i = 28; $i >= 1; $i--) {
	$income .= ',"'.income( date('m/d/Y', (strtotime(date('m/d/Y'))-($i*60*60*24)) ) ,$pdo).'"';
	$dates .= ',"'.( date('Y-m-d', (strtotime(date('Y-m-d'))-($i*60*60*24)) ) ).'"';	
}
$dates .= ',"'.date('Y-m-d').'"';
$income .= ',"'.income(date('m/d/Y'),$pdo).'"';

$expenses = '"'.expenses( date('Y-m-d', (strtotime(date('Y-m-d'))-((29*60*60*24)))) ,$pdo).'"';
for ($i = 28; $i >= 1; $i--) {
	$expenses .= ',"'.expenses( date('Y-m-d', (strtotime(date('Y-m-d'))-($i*60*60*24)) ) ,$pdo).'"';
}
$expenses .= ',"'.expenses(date('Y-m-d'),$pdo).'"';

$profit = '"'.profit( date('Y-m-d', (strtotime(date('Y-m-d'))-((29*60*60*24)))) ,$pdo).'"';
for ($i = 28; $i >= 1; $i--) {
	$profit .= ',"'.profit( date('Y-m-d', (strtotime(date('Y-m-d'))-($i*60*60*24)) ) ,$pdo).'"';
}
$profit .= ',"'.profit(date('Y-m-d'),$pdo).'"';
?>
<script>
//current year income / expense	
var barChartData3 = {
		labels : [<?php echo $dates; ?>],
		datasets : [
			{
				label: "Expenses",
				fillColor : "rgba(220,0,0,0.2)",
				strokeColor : "rgba(220,0,0,1)",
				pointColor : "rgba(220,0,0,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : [<?php echo $expenses; ?>]
			} ,
			{
				label: "Income",
				fillColor : "rgba(0,120,0,0.2)",
				strokeColor : "rgba(0,120,0,1)",
				pointColor : "rgba(0,320,0,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : [<?php echo $income; ?>]
			} ,
			{
				label: "Profit",
				fillColor : "rgba(13, 31, 162,0.2)",
				strokeColor : "rgba(13, 31, 162,1)",
				pointColor : "rgba(13, 31, 162,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : [<?php echo $profit; ?>]
			} 
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("myChart").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData3, {
			responsive : true
		});
	}	 

	
</script>
	<!-- BEGIN: Customizer-->
	<?php include_once 'includes/customizer.php'; ?>
	<!-- End: Customizer-->
	<!-- BEGIN: Footer-->
	<?php include_once 'includes/footer.php'; ?>
	<!-- END: Footer-->
	<!-- BEGIN: Vendor JS-->
	<script src="app-assets/vendors/js/vendors.min.js"></script>
	<!-- BEGIN Vendor JS-->
	<!-- BEGIN: Page Vendor JS-->
	<script src="app-assets/vendors/js/charts/chartist.min.js"></script>
	<script src="app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
	<script src="app-assets/vendors/js/charts/raphael-min.js"></script>
	<script src="app-assets/vendors/js/charts/morris.min.js"></script>
	<script src="app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
	<!-- END: Page Vendor JS-->
	<!-- BEGIN: Theme JS-->
	<script src="app-assets/js/core/app-menu.min.js"></script>
	<script src="app-assets/js/core/app.min.js"></script>
	<script src="app-assets/js/scripts/customizer.min.js"></script>
	<script src="app-assets/js/scripts/footer.min.js"></script>
	<!-- END: Theme JS-->
	<!-- BEGIN: Page JS-->
	<script src="app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
	<script type="text/javascript" src="Chart.js"></script>
<script type="text/javascript" src="Chart.min.js"></script>
	<!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>