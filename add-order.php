<?php 
  require_once('includes/functions.php');
  dbconnect();
  session_start();

  $user = $_SESSION['username'];
  $usid = $pdo->query("SELECT id FROM users WHERE username='".$user."'");
  $usid = $usid->fetch(PDO::FETCH_ASSOC);
  $uid = $usid['id'];

  if (!is_user()) {
    redirect('login.php');}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Add Order</title>
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
          <h3 class="content-header-title">Add Order</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="all-orders.php">Orders</a>
                </li>
                <li class="breadcrumb-item active">Add Order
                </li>
              </ol>
            </div>
          </div>
        </div>
        
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
            <?php

if($_POST)
{

$customer = $_POST["customer"];
$desc = $_POST["desc"];
$date_received = $_POST["date_received"];
$completed = $_POST["completed"];
$date_collected = $_POST["date_collected"];
$amount = $_POST["amount"];
$paid = $_POST["paid"];
$received_by = $_POST["received_by"];

$name = $pdo->query("SELECT fullname FROM customer WHERE id='".$customer."'");
$name = $name->fetch(PDO::FETCH_ASSOC);
$name = $name['fullname'].": ". substr($desc,0,100);

  if($completed == 'No'){
    $color = '#a00000';
  }
  else{
    $color = '#00a014';
  }
  $res = $pdo->exec("INSERT INTO `order`(`customer`, `description`, `amount`, `paid`, `received_by`, `date_received`, `completed`, `date_collected`) VALUES ('$customer','$desc','$amount','$paid','$received_by','$date_received','$completed','$date_collected')");
  $cid = $pdo->lastInsertId();
  $res2 = $pdo->exec("INSERT INTO `calendar`(`title`, `description`, `start`, `end`, `allDay`, `color`, `url`, `category`, `user_id`) VALUES ('$name','$desc','$date_received','$date_collected','true','$color','../orderedit.php?id=$cid','Orders','$uid')");
  if($res){
    echo "<div class='alert alert-success alert-dismissable'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>  
    Order Added Successfully!
    </div>";

} else {
  echo "<div class='alert alert-danger alert-dismissable'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>  
    Something went wrong!
    </div>";
}



} 
  ?>
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls">Adding Order Form</h4>
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
                              <label for="customer">Select Customer</label>
                              <select id="customer" name="customer" class="form-control round">
                                <option value="none" selected="" disabled="">Select Customer</option>
                                <?php

                $ddaa = $pdo->query("SELECT id, fullname FROM customer ORDER BY id");
                    while ($data = $ddaa->fetch(PDO::FETCH_ASSOC))
                    {
                    if(isset($_GET['id']) && $data['id'] == $_GET['id'])
                    {
                      echo "<option value='$data[id]' selected='selected'>$data[fullname]</option>";
                    }
                    else
                    {
                       echo "<option value='$data[id]'>$data[fullname]</option>";
                    }
                  }
                ?>
                              </select>
                        </div>
                        
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea id="description" rows="3" class="form-control round" name="desc" placeholder="description"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="datereceived">Date Received</label>
                          <input type="date" id="datereceived" class="form-control round" name="date_received">
                        </div>
                        <div class="form-group">
                          <label for="receivedby">Received By</label>
                          <input type="text" id="receivedby" class="form-control round" placeholder="receiver's name" name="received_by">
                        </div>
                        <div class="form-group">
                          <label for="amount">Amount</label>
                          <input type="number" id="amount" class="form-control round" placeholder="enter the amount" name="amount">
                        </div>
                        <div class="form-group">
                          <label for="paid">Paid</label>
                         <input type="number" id="paid" class="form-control round" placeholder="amount paid" name="paid">
                        </div>
                        <div class="form-group">
                              <label for="completed">Completed?</label>
                              <select id="completed" name="completed" class="form-control round">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                        </div>
                        <div class="form-group">
                          <label for="collectdate">Date To Collect</label>
                          <input type="date" id="collectdate" class="form-control round" name="date_collected">
                        </div>
                      </div>
                      <div class="form-actions">
                        <button name="add_order" type="submit" class="btn btn-primary block">
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