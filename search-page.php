<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Search Page</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/search.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 1-column   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="1-column">

	<!-- BEGIN: Header-->
	<?php include_once("includes/header.php"); ?>
    <!-- END: Header-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="row full-height-vh-with-nav">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-6 col-10">
            <img class="img-fluid mx-auto d-block pb-3 pt-4 width-65-per" src="app-assets/images/logo/logo-dark-lg.png" alt="Modern Search">
            <fieldset class="form-group position-relative">
                <input type="text" class="form-control form-control-xl input-xl" id="iconLeft1" placeholder="Explore Modern ...">
                <div class="form-control-position">
                    <i class="ft-mic font-medium-4"></i>
                </div>
            </fieldset>
            <div class="row py-2">
                <div class="col-12 text-center">
                    <a href="search-website.php" class="btn btn-primary btn-md mb-1"><i class="ft-search"></i> Modern Search</a>
                    <span class="dropdown">
                            <button id="btnSearchDrop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning  btn-md dropdown-toggle dropdown-menu-right mb-1"><i class="la la-cog"></i> Advanced search</button>
                            <span aria-labelledby="btnSearchDrop" class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="search-website.php" class="dropdown-item"><i class="ft-globe"></i> Web</a>
                                <a href="search-images.php" class="dropdown-item"><i class="la la-file-image-o"></i> Images</a>
                                <a href="search-videos.php" class="dropdown-item"><i class="ft-video"></i> Videos</a>
                                <a href="search-maps.php" class="dropdown-item"><i class="la la-map-o"></i> Maps</a>
                                <span class="dropdown-divider block"></span>
                                <a href="search-maps.php" class="dropdown-item"><i class="la la-smile-o"></i> I'm Feeling Lucky</a>
                            </span>
                        </span>
                </div>
            </div>
            <div class="row py-1">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="la la-facebook"></span></a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="la la-linkedin font-medium-4"></span></a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="la la-github font-medium-4"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>