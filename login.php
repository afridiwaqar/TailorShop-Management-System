<?php
// if (file_get_contents('includes/function.php') == '') {
//   header('Location: '.'/install/');
// } 
require_once('includes/functions.php');
dbconnect();
session_start();
if (is_user()) {
  redirect('index.php');
}elseif (isset($_POST['login'])) {
  if (attempt($_POST['username'], $_POST['password'])) {
    redirect('index.php');
  }
  else {
    redirect('login.php?error=' . urlencode('Wrong username or password'));
  }
}


?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Login</title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END: Vendor CSS-->
  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
  <!-- END: Theme CSS-->
  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-content-menu.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.min.css">
  <!-- END: Page CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-content-menu 1-column bg-cyan blank-page" data-open="click" data-menu="vertical-content-menu" data-col="1-column">
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="row flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1"><img src="app-assets/images/logo/logo-dark.png" alt="branding logo"></div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Enter Username And Password To Login</span>
                  </h6>
                </div>
                <?php if (!empty($_GET['error'])): ?>
                                <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  
                    <?php echo $_GET['error']?>
                                  </div>
                                <?php endif ?>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" method="POST" validate>
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input name="username" type="text" class="form-control" id="user-name" placeholder="Your Username" required>
                        <div class="form-control-position">
                          <i class="la la-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input name="password" type="password" class="form-control" id="user-password" placeholder="Enter Password" required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-sm-6 col-12 text-center text-sm-left">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-sm-6 col-12 text-center text-sm-right"><a href="#" class="card-link">Forgot Password?</a></div>
                      </div>
                      <button type="submit" name="login" class="btn btn-info btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- END: Content-->
  <!-- BEGIN: Vendor JS-->
  <script src="app-assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->
  <!-- BEGIN: Page Vendor JS-->
  <script src="app-assets/vendors/js/ui/headroom.min.js"></script>
  <script src="app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
  <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
  <!-- END: Page Vendor JS-->
  <!-- BEGIN: Theme JS-->
  <script src="app-assets/js/core/app-menu.min.js"></script>
  <script src="app-assets/js/core/app.min.js"></script>
  <!-- END: Theme JS-->
  <!-- BEGIN: Page JS-->
  <script src="app-assets/js/scripts/forms/form-login-register.min.js"></script>
  <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>