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
   
    <title>Add Measurement</title>
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
          <h3 class="content-header-title">Add Measurement</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="all-customer.php">Customers</a>
                </li>
                <li class="breadcrumb-item">Add Measurement
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
  $id = $_GET["id"];
  foreach ($_POST as $key => $value)
  {
     $parts = $pdo->query("SELECT id FROM part WHERE title='".$key."'");
    $parts = $parts->fetch(PDO::FETCH_ASSOC);
     $part = $parts['id'];
     $res = $pdo->exec("INSERT INTO `measurement`(`customer_id`, `part_id`, `measurement`) VALUES ('$id' ,'$key','$value')");

  }
echo "<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>  

Measurements Added Successfully!

</div>
<meta http-equiv='refresh' content='2; url=orderadd.php?id=$id' /> ";



} 
  ?>
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls">Adding Measurement For <?php
$id = $_GET["id"];
$ddaa = $pdo->query("SELECT fullname,sex FROM customer where id = '$id'");
$dda = $ddaa->fetch(PDO::FETCH_ASSOC);
    echo($dda["fullname"]);
?></h4>
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
                <form action="addmeasurement.php?id=<?php echo ($_GET['id']);?>" method="post">
                <div class="card-content collapse show">
                  <div class="card-body">
        <?php
          $type = $pdo->query("SELECT id, title FROM type where sex= '$dda[sex]'");

          while ($typee = $type->fetch(PDO::FETCH_ASSOC))
          {
            echo('<div><p>'.$typee["title"].'</p>');
   echo('<table>'); 
  $ddaa = $pdo->query("SELECT id, title, image FROM part where type='$typee[id]'");
    while ($data = $ddaa->fetch(PDO::FETCH_ASSOC))
    {
    $img = 'img/part/'.$data["image"];
    echo "<tr>
    <td>
    <img src='$img' width='50px' /></td>
    <td style='width:200px; height: 40px; margin: 20px;'><label>$data[title]</label></td>";
    echo "<td>
        <input class='form-control round' type='text' name='$data[id]' style='width:200px; height: 40px; margin: 20px;' />
        </td>
      </tr>";
    
  }
  echo('</table>'); 
  echo('</div>');
}
?>
              <div class="form-actions">
                        <button name="add_measurement" type="submit" class="btn btn-primary block">
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
