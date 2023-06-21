<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Threados Admin">
    <meta name="keywords" content="Threados">
    <meta name="author" content="PIXINVENT">
    <title>Reset Password - Threados</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- reset password start -->
<section class="row flexbox-container">
    <div class="col-xl-7 col-10">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- left section-login -->
                <div class="col-md-6 col-12 px-0">
                    <div class="card disable-rounded-right d-flex justify-content-center mb-0 p-2 h-100">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="text-center mb-2">Reset your Password</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="mb-2" id="niteshData">
                                <div class="form-group">
                                    <label class="text-bold-600" for="exampleInputPassword1">New Password</label>
                                    <input type="hidden" name="id" value="<?php echo $_GET['forgetID']?>">
                                    <input type="password" name ="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Enter a new password" required=""></div>
                                <div class="form-group mb-2">
                                    <label class="text-bold-600" for="exampleInputPassword2">Confirm New
                                        Password</label>
                                    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword2"
                                        placeholder="Confirm your new password" required=""></div>
                                <button type="submit" class="btn btn-primary glow position-relative w-100">Reset my
                                    password<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                            </form>
                        </div>
                        <div id="Message">
                            
                        </div>
                    </div>
                </div>
                <!-- right section image -->
                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                    <img class="img-fluid" src="app-assets/images/pages/reset-password.png"
                        alt="branding logo">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reset password ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

</html>

<script type="text/javascript">
    $(document).ready(function(nitesh)
    {
        //alert('niteshsahu1');
        $("#niteshData").on("submit",function(nitesh)
        {
            alert('niteshsahu');
            nitesh.preventDefault();
            $.ajax({
                url:"php/resetpass.php",
                type:"post",
                data: new FormData(this),
                contentType: false, //yah Connetent ko Encode nahi karta hai 
                processData: false, //same as 
                //data:$('form').serialize(),
                success:function(data)
                {
                    alert(data);
                    $("#Message").html(data);
                }
            });
        });
    });
     // $.ajax({
     //      url:"php/add_vendor.php",
     //      type:"post",
     //      data:$('form').serialize(),
     //      success:function(data)
     //      {
     //        //alert(data);
     //        $("#message").html(data);
     //      }
     //    });
</script>