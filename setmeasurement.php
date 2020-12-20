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
          <h3 class="content-header-title">Add measurement</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="measurement-parts.php">measurements</a>
                </li>
                <li class="breadcrumb-item ">Set Measurement
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

$type = $_POST["type"];
$title = $_POST["title"];
$detail = $_POST["detail"];



// IMAGE UPLOAD //////////////////////////////////////////////////////////
	$folder = "img/part/";
	$extention = strrchr($_FILES['bgimg']['name'], ".");
	$bgimg = $_FILES['bgimg']['name'];
	//$bgimg = $new_name.'.jpg';
	$uploaddir = $folder . $bgimg;
	move_uploaded_file($_FILES['bgimg']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////////////////////////////


///////////////////////-------------------->> Catid  ki 0??
$error = 0;

 if($type==0)
      {
$err1=1;
}
 


if(isset($err1))
 $error = $err1;;


if (!isset($error) || $error == 0){

$res = $pdo->exec("INSERT INTO `part` SET type='".$type."', title='".$title."', description='".$detail."', image='".$bgimg."'");
if($res){

echo "<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Measurement Part Added Successfully!

</div>";

}else{
	echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Some Problem Occurs, Please Try Again. 

</div>";
}
} else {
	
	
if (!isset($err1) || $err1 == 1){
echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Please select a Category!!!!

</div>";
}	
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
                    <form method="Post" class="form" enctype="multipart/form-data" validate>
                      <div class="form-body">
                      	<div class="form-group">
                              <label for="category"> Select Category</label>
                              <select id="category" name="type" class="form-control round">
                                <option value="none" selected="" disabled="">Please Select a Category</option>
                               <?php
													$ddaa = $pdo->query("SELECT id, title FROM type ORDER BY id");
											    while ($data = $ddaa->fetch(PDO::FETCH_ASSOC))
											    {									
											 echo "<option value='$data[id]'>$data[title]</option>";
												}
													?>
                              </select>
                        </div>
                        <div class="form-group">
													<label for="title">Measurement Name</label>
													<div class="position-relative">
														<input required type="text" id="title" class="form-control round" placeholder="measurement name" name="title">
													</div>
												</div>
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea id="description" rows="3" class="form-control round" name="detail" placeholder="description"></textarea>
                        </div>
                        <div class="form-group">
				                  <label for="image" class="col-sm-3 control-label">Image</label>
				                 	<fieldset class="form-group">
                          <div class="custom-file">
                              <input name="bgimg" type="file" class="custom-file-input" id="image">
                              <label class="custom-file-label" for="image" aria-describedby="image">Choose image</label>
                          </div>
                      </fieldset>
				                </div>
                        
                      <div class="form-actions">
                        <button name="submit" type="submit" class="btn btn-primary block">
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