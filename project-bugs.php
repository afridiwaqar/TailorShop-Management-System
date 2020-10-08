<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Project Bugs </title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/rowReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/selects/select2.min.css">
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
  <body class="vertical-layout vertical-menu content-detached-left-sidebar   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="content-detached-left-sidebar">

    <!-- BEGIN: Header-->
    <?php include_once("includes/header.php.php"); ?>
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
            <h3 class="content-header-title">Project Bugs</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Project</a>
                  </li>
                  <li class="breadcrumb-item active">Project Bugs
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.php">Cards</a><a class="dropdown-item" href="component-buttons-extended.php">Buttons</a></div>
            </div>
          </div>
        </div>
        <div class="content-detached content-right">
          <div class="content-body"><section class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">All Bugs</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
        <div class="heading-elements">
          <button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Submit Bug</button>
          <span class="dropdown">
            <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
              class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right"><i
                class="ft-download white"></i></button>
            <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
              <a href="#" class="dropdown-item"><i class="la la-calendar"></i> Due Date</a>
              <a href="#" class="dropdown-item"><i class="la la-random"></i> Priority </a>
              <a href="#" class="dropdown-item"><i class="la la-bar-chart"></i> Progress</a>
              <a href="#" class="dropdown-item"><i class="la la-user"></i> Assign to</a>
            </span>
          </span>
          <button class="btn btn-success btn-sm"><i class="ft-settings white"></i></button>
        </div>
      </div>
      <div class="card-content">
        <div class="card-body">
          <!-- Task List table -->
          <div class="table-responsive">
            <table id="project-bugs-list"
              class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Bug</th>
                  <th>Asignee</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#" class="text-bold-600">#101</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Vertical menu issue on iPad</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="John Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-info">In Progress</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#220</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Progress bar animation improvement</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Amy Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-warning">Open</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop3" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#420</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Authentication API security issue</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-danger">Reopen</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop4" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#124</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Project page chart issue</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-16.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-info">In Progress</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop5" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#140</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Profile page timeline issue</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-success">To be tested</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop6" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#261</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Tooltip display issue in login form</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-warning">Open</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop7" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#158</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Button loading issue on submit</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-9.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-info">Closed</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop8" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#158</a></td>
                  <td>
                    <a href="#" class="text-bold-600">D3 Chart responsive issue</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-10.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-danger">Reopen</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop9" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#850</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Google map reset location</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-11.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-warning">Open</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop10" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#550</a></td>
                  <td>
                    <a href="#" class="text-bold-600">jQuery drag and drop integration issue</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-12.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-info">In Progress</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop11" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#425</a></td>
                  <td>
                    <a href="#" class="text-bold-600">DataTable inline editable issue</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-14.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-danger">Reopen</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop12" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#526</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Vertical menu issue on iPad</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="John Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-info">In Progress</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop13" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#995</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Progress bar animation improvement</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Amy Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-warning">Open</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop14" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#992</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Authentication API security issue</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-danger">Reopen</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop15" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" class="text-bold-600">#956</a></td>
                  <td>
                    <a href="#" class="text-bold-600">Project page chart issue</a>
                    <p class="text-muted font-small-2">Phasellus vel elit volutpat, egestas urna a.</p>
                  </td>
                  <td class="text-center">
                    <span class="avatar avatar-busy">
                      <img src="app-assets/images/portrait/small/avatar-s-16.png" alt="avatar"
                        data-toggle="tooltip" data-placement="right" title="Joe Doe"><i class=""></i>
                    </span>
                  </td>
                  <td><span class="badge badge-info">In Progress</span></td>

                  <td>
                    <span class="dropdown">
                      <button id="btnSearchDrop16" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                      <span aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Bug</a>
                        <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                        <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Bug</a>
                      </span>
                    </span>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Bug</th>
                  <th>Asignee</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

          </div>
        </div>
        <div class="sidebar-detached sidebar-left">
          <div class="sidebar"><div class="bug-list-sidebar-content">
  <!-- Predefined Views -->
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Predefined Views</h4>
      <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
      <div class="heading-elements">
        <ul class="list-inline mb-0">
          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
          <li><a data-action="close"><i class="ft-x"></i></a></li>
        </ul>
      </div>
    </div>
    <!-- bug-list search -->
    <div class="card-content collapse show">
      <div class="card-body border-top-blue-grey border-top-lighten-5">
        <div class="bug-list-search">
          <div class="bug-list-search-content">
            <form action="#">
              <div class="position-relative">
                <input type="search" class="form-control" placeholder="Search project bugs...">
                <div class="form-control-position">
                  <i class="ft-search text-size-base text-muted"></i>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /bug-list search -->

      <!-- bug-list view -->
      <div class="card-body ">
        <div class="list-group">
          <a href="#" class="list-group-item active">All Bugs</a>
          <a href="#" class="list-group-item list-group-item-action">All Open</a>
          <a href="#" class="list-group-item list-group-item-action">All Closed</a>
          <a href="#" class="list-group-item list-group-item-action">My Open</a>
          <a href="#" class="list-group-item list-group-item-action">My Closed</a>
          <a href="#" class="list-group-item list-group-item-action">Overdue Bugs</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Created Today</a>
          <a href="#" class="list-group-item list-group-item-action">Bugs I Follow</a>
        </div>
      </div>
    </div>
  </div>
  <!--/ Predefined Views -->

  <!-- Bug Progress -->
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Bug Progress</h4>
      <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
      <div class="heading-elements">
        <ul class="list-inline mb-0">
          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
          <li><a data-action="close"><i class="ft-x"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="card-content collapse show">
      <div class="card-body ">
        <div id="bug-pie-chart" class="height-300 echart-container"></div>
      </div>
    </div>
  </div>
  <!--/ Bug Progress -->

  <!-- QA Team -->
  <div class="card">
    <div class="card-header mb-0">
      <h4 class="card-title">QA Team</h4>
      <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
      <div class="heading-elements">
        <ul class="list-inline mb-0">
          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
          <li><a data-action="close"><i class="ft-x"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="card-content collapse show">
      <div class="card-body  py-0 px-0">
        <div class="list-group">
          <a href="javascript:void(0)" class="list-group-item">
            <div class="media">
              <div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img
                    src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
              <div class="media-body">
                <h6 class="media-heading mb-0">Margaret Govan</h6>
                <p class="font-small-2 mb-0">QA Analyst</p>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="list-group-item">
            <div class="media">
              <div class="media-left pr-1"><span class="avatar avatar-sm avatar-busy rounded-circle"><img
                    src="app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
              <div class="media-body">
                <h6 class="media-heading mb-0">Bret Lezama</h6>
                <p class="font-small-2 mb-0">QA Person</p>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="list-group-item">
            <div class="media">
              <div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img
                    src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
              <div class="media-body">
                <h6 class="media-heading mb-0">Carie Berra</h6>
                <p class="font-small-2 mb-0">QA Manager</p>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="list-group-item">
            <div class="media">
              <div class="media-left pr-1"><span class="avatar avatar-sm avatar-away rounded-circle"><img
                    src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
              <div class="media-body">
                <h6 class="media-heading mb-0">Eric Alsobrook</h6>
                <p class="font-small-2 mb-0">QA Lead</p>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="list-group-item">
            <div class="media">
              <div class="media-left pr-1"><span class="avatar avatar-sm avatar-away rounded-circle"><img
                    src="app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"><i></i></span></div>
              <div class="media-body">
                <h6 class="media-heading mb-0">John Alsobrook</h6>
                <p class="font-small-2 mb-0">QA Person</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--/ QA Team -->
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
    <script src="app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js"></script>
    <script src="app-assets/vendors/js/forms/select/select2.min.js"></script>
    <script src="app-assets/vendors/js/tables/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js"></script>
    <script src="app-assets/vendors/js/charts/apexcharts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/project-bug-list.min.js"></script>
    <script src="app-assets/js/scripts/pages/project-summary-bug.min.js"></script>
    <script src="app-assets/js/scripts/ui/jquery-ui/date-pickers.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>