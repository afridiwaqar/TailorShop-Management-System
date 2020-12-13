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
        
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
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
                    <form class="form" validate>
                      <div class="form-body">
                      	<div class="form-group">
                              <label for="customer">Select Customer</label>
                              <select id="customer" name="customer" class="form-control round">
                                <option value="none" selected="" disabled="">Select Customer</option>
                                <option value="design">design</option>
                                <option value="development">development</option>
                                <option value="illustration">illustration</option>
                                <option value="branding">branding</option>
                                <option value="video">video</option>
                              </select>
                        </div>
                        
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea id="description" rows="3" class="form-control round" name="description" placeholder="description"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="datereceived">Date Received</label>
                          <input type="date" id="datereceived" class="form-control round" name="datereceived">
                        </div>
                        <div class="form-group">
                          <label for="receivedby">Received By</label>
                          <input type="text" id="receivedby" class="form-control round" placeholder="receiver's name" name="receiver">
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
                              <select id="completed" name="interested" class="form-control round">
                                <option value="design">No</option>
                                <option value="development">Yes</option>
                              </select>
                        </div>
                        <div class="form-group">
                          <label for="collectdate">Date To Collect</label>
                          <input type="date" id="collectdate" class="form-control round" name="collectdate">
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