<?php include'../common/config.php';
if (!isset($_SESSION['loginadmin'])) {
echo "<script>window.location='login.php';</script>";
}
?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Cleanup Admin Panel">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>attendance_management_system</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="icon" type="image/x-icon" href="R.V._College_of_Engineering_logo.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/dragula.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/widgets.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="ficon bx bx-menu"></i></a></li>
              </ul>
           
            </div>
            <ul class="nav navbar-nav float-right">
        
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
              
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                  <div class="user-nav d-sm-flex d-none"><span class="user-name"><?php echo $_SESSION['loginName'];?></span><span class="user-status text-muted">Available</span></div><span><img class="round" src="../R.V._College_of_Engineering_logo.png" alt="avatar" height="40" width="40"></span></a>
                <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="edit_profile.php?edit=<?=base64_encode(base64_encode($_SESSION['loginIDbyCleanup']))?>"><i class="bx bx-user mr-50"></i> Edit Profile</a><!-- <a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a> -->
                  <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="../php/logout.php"><i class="bx bx-power-off mr-50"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
              <div class="brand-logo">
                <svg class="logo" width="26px" height="26px" viewbox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>icon</title>
                  <defs>
                    <lineargradient id="linearGradient-1" x1="50%" y1="0%" x2="50%" y2="100%">
                      <stop stop-color="#5A8DEE" offset="0%"></stop>
                      <stop stop-color="#699AF9" offset="100%"></stop>
                    </lineargradient>
                    <lineargradient id="linearGradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop stop-color="#FDAC41" offset="0%"></stop>
                      <stop stop-color="#E38100" offset="100%"></stop>
                    </lineargradient>
                  </defs>
                 
                </svg>
              </div>
              <img src="../R.V._College_of_Engineering_logo.png"  width="50px" height="50px" >
              <!-- <h2 class="brand-text mb-0">Threados</h2></a></li> -->
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
         
 
          <li class=" navigation-header text-truncate"><span data-i18n="Charts &amp; Maps">Student Management</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="bx bxs-user-detail"></i><span class="menu-title text-truncate" data-i18n="Charts">Student</span><span class="badge badge-pill badge-round badge-light-success float-right mr-50 ml-auto"></span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="add_class.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Apex">Add Class</span></a>
              </li>
                <li><a class="d-flex align-items-center" href="class.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Apex">All Class</span></a>
              </li>
                     <li><a class="d-flex align-items-center" href="user_management.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Apex">Add Student</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="user.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Apex">All Student</span></a>
              </li>
       
              
            </ul>
          </li>

           <li class=" navigation-header text-truncate"><span data-i18n="Charts &amp; Maps">Teacher Management</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="bx bxs-user-detail"></i><span class="menu-title text-truncate" data-i18n="Charts">Teacher</span><span class="badge badge-pill badge-round badge-light-success float-right mr-50 ml-auto"></span></a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="add_department.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Apex">Add Department</span></a>
              </li>
                <li><a class="d-flex align-items-center" href="department.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Apex">All Department</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="teacher.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Apex">All Teacher</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="teacher_management.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Apex">Add Teacher</span></a>
              </li>
            </ul>
          </li>
           <li class=" navigation-header text-truncate"><span data-i18n="Charts &amp; Maps">TimeSheet Management</span>
          </li>
          
             <li><a class="d-flex align-items-center" href="timesheet.php"><i class="bx  bxs-user"></i><span class="menu-item text-truncate" data-i18n="Apex">All Student Timesheet</span></a>
           </li>

           
          
             <li><a class="d-flex align-items-center" href="timesheets.php"><i class="bx  bxs-user-plus"></i><span class="menu-item text-truncate" data-i18n="Apex">All Teacher Timesheet</span></a>

           </li>
             
        
        
        <li><a class="d-flex align-items-center" href="contactdetails.php"><i class="bx  bxs-user-plus"></i><span class="menu-item text-truncate" data-i18n="Apex">Contact</span></a>

           </li>
         

          

          
        </ul>

        
            
      </div>
    </div>
    <!-- END: Main Menu-->