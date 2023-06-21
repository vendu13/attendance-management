<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="PIXINVENT">
    <title>ISE Attendance Manage</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="icon" type="image/x-icon" href="../R.V._College_of_Engineering_logo.png">

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
<style type="text/css">
    html .bg-full-screen-image {
    background: url(../webimage/back.jpg) center center no-repeat;
    background-size: cover;
}
body{
    color: #ae2081;
}
.btn-primary, .btn-primary:hover {
    background-color: #ae2081!important;
    color: #FFF;
}
</style>
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
        <div class="content-body"><!-- login page start -->
<section id="auth-login" class="row flexbox-container">
    <div class="col-xl-8 col-11">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- left section-login -->
                <div class="col-md-6 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="text-center mb-2">Welcome !</h4>
                                <img src="">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-md-row flex-column justify-content-around">
                                <a href="javascript:void(0);"
                                    class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                                    <i class="bx bxl-google font-medium-3"></i><span
                                        class="pl-50 d-block text-center">Google</span></a>
                                <a href="javascript:void(0);" class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                                    <i class="bx bxl-facebook-square font-medium-3"></i><span
                                        class="pl-50 d-block text-center">Facebook</span></a>
                            </div>
                            <div class="divider">
                                <div class="divider-text text-uppercase text-muted"><small>or login with
                                        email</small>
                                </div>
                            </div>
                            <form action="" id="formLogin">

                                <div class="form-group">
                                    <label class="text-bold-600" for="exampleInputPassword1">Please Choose Here</label>
                                    <select name="type" class="form-control">
                                        <option value="0" <?php $_GET['type']==0 ? 'selected':'';?>>Student</option>
                                        <option value="1" <?php $_GET['type']==1 ? 'selected':'';?>>Teacher</option>
                                        <option value="2" <?php $_GET['type']==2 ? 'selected':'';?>>Admin </option>
                                        
                                        
                                     
                                    </select>
                                </div>
                                <div class="form-group mb-50">
                                    <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                        placeholder="Email address"></div>
                                <div class="form-group">
                                    <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div
                                    class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                    <div class="text-left">
                                        <div class="checkbox checkbox-sm">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                           <!--  <label class="checkboxsmall" for="exampleCheck1"><small>Keep me logged
                                                    in</small></label> -->
                                        </div>
                                    </div>
                                   <!--  <div class="text-right"><a href="auth-forgot-password.html"
                                            class="card-link"><small>Forgot Password?</small></a></div> -->
                                </div>
                                <button type="submit" class="btn btn-primary glow w-100 position-relative">Login<i
                                        id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                            </form>
                            <div id="successmessage"></div>
                            <hr>
                            <!-- <div class="text-center"><small class="mr-25">Don't have an account?</small><a
                                    href="auth-register.html"><small>Sign up</small></a></div> -->
                        </div>
                    </div>
                </div>
                <!-- right section image -->
                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                    <img class="img-fluid" src="R.V._College_of_Engineering_logo.png" alt="branding logo">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login page ends -->

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

<script type="text/javascript">
    
  $(document).ready(function(abcabn) {
        $("#formLogin").on('submit', (function(abcabn) {
          //alert('hello');
            abcabn.preventDefault();
            $.ajax({
                url: "../php/login.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    $("#successmessage").html(data);
                },
                error: function() {}
            });
        }));
    });
</script>
</html>