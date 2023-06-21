<?include('common/config.php'); 
  ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="description" content="Cleanup Home page">
      <meta name="keywords" content="Cleanup">
      <meta name="author" content="PIXINVENT">
      <title> Home Page</title>
      <link rel="apple-touch-icon" href="Admin/app-assets/images/ico/apple-icon-120.html">
      <link rel="icon" type="image/x-icon" href="R.V._College_of_Engineering_logo.png">
      <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
      <!-- BEGIN: Vendor CSS-->
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/vendors/css/vendors.min.css">
      <!-- END: Vendor CSS-->
      <!-- BEGIN: Theme CSS-->
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/css/bootstrap-extended.min.css">
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/css/colors.min.css">
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/css/components.min.css">
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/css/themes/dark-layout.min.css">
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/css/themes/semi-dark-layout.min.css">
      <!-- END: Theme CSS-->
      <!-- BEGIN: Page CSS-->
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
      <link rel="stylesheet" type="text/css" href="Admin/app-assets/css/pages/authentication.css">
      <!-- END: Page CSS-->
      <!-- BEGIN: Custom CSS-->
      <link rel="stylesheet" type="text/css" href="Admin/assets/css/style.css">
      <!-- END: Custom CSS-->
      <style type="text/css">


body{
   overflow-x:hidden;
}
         img.homelogo {
         height: 75px;
         margin-left: 30%;
         }

         img.card-img-top {
         height: 100px;
         width: 110px;
         margin-left: 10%;
         }

         span{
            font-size: 20px !important;
         }
         a:hover {
         color: #ffffff;
         text-decoration: none;
         }
         button.btn.btn-nk {
         background: #13216a;
         font-weight: 500;
         color: white;
         }
         section.row.flexbox-container.text-center.nk {
         display: flex;
         flex-direction: row;
         flex-wrap: nowrap;
         align-content: center;
         justify-content: center;
         align-items: center;
         }
         /* clock */
         .clockdate-wrapper {
         background-color: #333;
         padding:20px;
         max-width:350px;
         width:100%;
         text-align:center;
         border-radius:5px;
         margin:17px 0px 0px 113px;
         height: 360px;
         }
         #clock{
         background-color:#333;
         font-family: sans-serif;
         font-size:50px;
         text-shadow:0px 0px 1px #fff;
         color:#fff;
         }
         #clock span {
         color:#888;
         text-shadow:0px 0px 1px #333;
         font-size:45px;
         position:relative;
         top:-5px;
         left:10px;
         }
         #date {
         letter-spacing:3px;
         font-size:24px;
         font-family:arial,sans-serif;
         color:#fff;
         }
         .clock-attendance {
         text-align: center;
         }
         h1.attendance {
         font-weight: 900;
         font-size: 57px;
         padding: 30px 0px;
         }
       
         .card.bg-authentication.mb-0 {
         height: 444px;
         }
         .img-fluid{
      background-size: cover;
         }
         .p-3 {
         padding: 0rem!important;
         }
         .card.bg-authentication.mb-0 {
         height: 444px;
         }
         .sign-in {
         background-color: #2E5C9A;
         color: white;
         margin-top: 25px;
         padding: 15px 27px;
         border-radius: 10px;
         font-family:arial,sans-serif;
         letter-spacing:3px;
         }
         /*-----------------------------------------------------------------------------------*/
         *{
	box-sizing:border-box;
}


.loading-container{
	position:relative;
	height:200px;
	width: 100px;
	margin:100px auto;
	border-radius:50%;
}

.loading-container-child{
	height: 100px;
   width: 100px;
   border-radius:50%;
   position:absolute;
	top:0;
	left:0;
	transition:0.6s all;
}

.circle {
  background-color: #077ff2;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  height: 100px;
  position: absolute;
  width: 100px;
  -webkit-transform: scale(0);
  transform: scale(0);
  -webkit-animation: opacityScale 1700ms ease-out infinite;
  animation: opacityScale 1700ms ease-out infinite;
}

.secon {
  animation-delay: 850ms;
}

@-webkit-keyframes opacityScale {
  0% {
    opacity: 1;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
  }
}
@keyframes opacityScale {
  0% {
    opacity: 1;
    transform: scale(0.1);
  }
  100% {
    opacity: 0;
    transform: scale(1);
  }
}

.spinner{
  font-size: 0;
  border:5px solid #bbbbbb;
  -webkit-animation: rotating 2s 0.25s linear infinite;
          animation: rotating 2s 0.25s linear infinite;
}

.onclic {
  border-left-color: #1ECD97;
  -webkit-animation: rotating 2s 0.25s linear infinite;
          animation: rotating 2s 0.25s linear infinite;
}




@-webkit-keyframes rotating {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes rotating {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

.invisible{
	opacity:0;
	transition:0.6s all;
}


.processing{
	width:100px;
	height: 100px;
	align-items: center;
   display: flex;
   justify-content: center;
   position: relative;
}

.fingerprint {
  /* height: 80px; */
  left: -8px;
  opacity: 0;
  position: absolute;
  stroke: #777;
  top: -9px;
  transition: opacity 1ms;
}
.fingerprint-active {
  stroke: #fff;
}
.fingerprint-out {
  opacity: 1;
}
.odd {
  stroke-dasharray: 0px 50px;
  stroke-dashoffset: 1px;
  transition: stroke-dasharray 1ms;
}
.even {
  stroke-dasharray: 50px 50px;
  stroke-dashoffset: -41px;
  transition: stroke-dashoffset 1ms;
}
.active .fingerprint {
  opacity: 1;
  transition: opacity 300ms 200ms;
}
.active .fingerprint-base .odd {
  stroke-dasharray: 50px 50px;
  transition: stroke-dasharray 1800ms 5ms;
}
.active .fingerprint-base .even {
  stroke-dashoffset: 0px;
  transition: stroke-dashoffset 500ms;
}
.active .fingerprint-active .odd {
  stroke-dasharray: 50px 50px;
  transition: stroke-dasharray 7000ms 1500ms;
}
.active .fingerprint-active .even {
  stroke-dashoffset: 0px;
  transition: stroke-dashoffset 5000ms 30ms;
}
.active .fingerprint-out {
  opacity: 0;
  transition: opacity 300ms 4100ms;
}


.circ{
    opacity: 0;
    stroke-dasharray: 130;
    stroke-dashoffset: 130;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    -ms-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}
.tick, .cross{
    stroke-dasharray: 50;
    stroke-dashoffset: 50;
    -webkit-transition: stroke-dashoffset 1s 0.5s ease-out;
    -moz-transition: stroke-dashoffset 1s 0.5s ease-out;
    -ms-transition: stroke-dashoffset 1s 0.5s ease-out;
    -o-transition: stroke-dashoffset 1s 0.5s ease-out;
    transition: stroke-dashoffset 1s 0.5s ease-out;
}
.drawn svg .path{
    opacity: 1;
    stroke-dashoffset: 0;
}

.side-img{
   display: block;

}

.para{
   text-align:start;
}

@media only screen and (max-width: 600px){
    /* clock */
    .clockdate-wrapper {
    background-color: #333;
    padding: 20px;
    max-width: 270px;
    width: 100%;
    text-align: center;
    border-radius: 5px;
    margin: 16px 0px 0px 20px;
    height: 360px;
}

.loading-container {
    position: relative;
    height: 200px;
    width: 100px;
    margin: 5px auto;
    border-radius: 50%;
}

.side-img{
   display: none;

}

img.card-img-top {
    height: 100px;
    width: 110px;
    margin: auto;
}

.para{
   text-align:center;
}

}




      </style>
   </head>
   <!-- END: Head-->
   <!-- BEGIN: Body-->
   <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column"  onload="startTime()">
      <div >
         <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand "><img src="R.V._College_of_Engineering_logo.png" class="homelogo"></a>
            <button class="btn btn-nk">
            <?if (isset($_SESSION['name'])){?>
            <a href="php/logout.php">Log Out</a>
            <?}else{?>
            <a href="https://developerdeepika.com/attendance_management_system/Admin/login.php">Sign In</a>
            <?}?>
            </button>
         </nav>
      </div>
      <?
         if (!isset($_SESSION['name'])) {
             ?>
             
      <section class="row flexbox-container text-center nk">
         <div class="col-xl-7 col-md-8 col-12">
            <div class="card bg-transparent shadow-none">
               <div class="card-body text-center bg-transparent">
                  <img src="illupng.png" class="img-fluid" alt="not authorized" width="200px" height="100px">
                  <h1 class="my-2 error-title">Please Login Here!</h1>
                  <p>You do not have permission to view this directory or page using the credentials that you supplied.</p>
                  <a href="https://developerdeepika.com/attendance_management_system/Admin/login.php" class="btn btn-primary round glow mt-2">Login Here</a>
               </div>
            </div>
         </div>
      </section>
      <?}else{?>
      <!-- BEGIN: Content-->
      
      <div class="content">
         <div class="content-overlay"></div>
         <div class="content-wrapper">
            <div class="content-header row">
            </div>
             <p class="badge"><?php if($_SESSION['type']==0) {?>
                             Student - <?php echo $_SESSION['name']; ?></p>
                            <?php  }else {?> Teacher - <?php echo $_SESSION['name']; ?></p><?php }?>
            <div class="content-body">
               <!-- register section starts -->
               <section class="row flexbox-container">
                  <div class="col-xl-10 col-10" style="background-image: linear-gradient(to right, red , yellow);">
                 <div class="card bg-authentication mb-0">
                        <div class="row m-0">
                           <!-- register section left -->
                           <div class="col-md-5 px-0">
                             <div id="clockdate">
                                <div class="clockdate-wrapper">
                                     
                                    <div id="date"></div>
                                    <div id="clock"></div>
                                             <form class="form form-vertical" id="formData">

                                             <input type="hidden" class="form-control" name="id"
                                             placeholder="id" required  id="id" value="<?php echo $_SESSION['id']; ?>">

                                             <input type="hidden" class="form-control" name="type"
                                             placeholder="Type" required  id="type" value="<?php echo $_SESSION['type'];?>">

           <input type="hidden" class="form-control" name="time" 
               placeholder="time" required  id="time" value="<?php echo $type ?>">

            

 <!-- END: Content-->
<div class="loading-container">
	<div class="loader loading-container-child">		
     <b  style="color: white;"> Click me	</b>
  		<div class="circle first" ></div>
  		<div class="circle secon"> </div>
	</div>
	<div class="spinner loading-container-child invisible"></div>
	
	<div class="processing loading-container-child">
	<svg class="fingerprint fingerprint-base" xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="3 3 100 100">
    <g class="fingerprint-out" fill="none" stroke-width="2" stroke-linecap="round">
      <path
            class="odd" d="m 25.117139,57.142857 c 0,0 -1.968558,-7.660465 -0.643619,-13.149003 1.324939,-5.488538 4.659682,-8.994751 4.659682,-8.994751" />
      <path
            class="odd" d="m 31.925369,31.477584 c 0,0 2.153609,-2.934998 9.074971,-5.105078 6.921362,-2.17008 11.799844,-0.618718 11.799844,-0.618718" />
      <path
            class="odd" d="m 57.131213,26.814448 c 0,0 5.127709,1.731228 9.899495,7.513009 4.771786,5.781781 4.772971,12.109204 4.772971,12.109204" />
      <path
            class="odd" d="m 72.334009,50.76769 0.09597,2.298098 -0.09597,2.386485" />
      <path
            class="even" d="m 27.849282,62.75 c 0,0 1.286086,-1.279223 1.25,-4.25 -0.03609,-2.970777 -1.606117,-7.675266 -0.625,-12.75 0.981117,-5.074734 4.5,-9.5 4.5,-9.5" />
      <path
            class="even" d="m 36.224282,33.625 c 0,0 8.821171,-7.174484 19.3125,-2.8125 10.491329,4.361984 11.870558,14.952665 11.870558,14.952665" />
      <path
            class="even" d="m 68.349282,49.75 c 0,0 0.500124,3.82939 0.5625,5.8125 0.06238,1.98311 -0.1875,5.9375 -0.1875,5.9375" />
      <path
            class="odd" d="m 31.099282,65.625 c 0,0 1.764703,-4.224042 2,-7.375 0.235297,-3.150958 -1.943873,-9.276886 0.426777,-15.441942 2.370649,-6.165056 8.073223,-7.933058 8.073223,-7.933058" />
      <path
            class="odd" d="m 45.849282,33.625 c 0,0 12.805566,-1.968622 17,9.9375 4.194434,11.906122 1.125,24.0625 1.125,24.0625" />
      <path
            class="even" d="m 59.099282,70.25 c 0,0 0.870577,-2.956221 1.1875,-4.5625 0.316923,-1.606279 0.5625,-5.0625 0.5625,-5.0625" />
      <path
            class="even" d="m 60.901059,56.286612 c 0,0 0.903689,-9.415996 -3.801777,-14.849112 -3.03125,-3.5 -7.329245,-4.723939 -11.867187,-3.8125 -5.523438,1.109375 -7.570313,5.75 -7.570313,5.75" />
      <path
            class="even" d="m 34.072577,68.846248 c 0,0 2.274231,-4.165782 2.839205,-9.033748 0.443558,-3.821814 -0.49394,-5.649939 -0.714206,-8.05386 -0.220265,-2.403922 0.21421,-4.63364 0.21421,-4.63364" />
      <path
            class="odd" d="m 37.774165,70.831845 c 0,0 2.692139,-6.147592 3.223034,-11.251208 0.530895,-5.103616 -2.18372,-7.95562 -0.153491,-13.647655 2.030229,-5.692035 8.108442,-4.538898 8.108442,-4.538898" />
      <path
            class="odd" d="m 54.391174,71.715729 c 0,0 2.359472,-5.427681 2.519068,-16.175068 0.159595,-10.747388 -4.375223,-12.993087 -4.375223,-12.993087" />
      <path
            class="even" d="m 49.474282,73.625 c 0,0 3.730297,-8.451831 3.577665,-16.493718 -0.152632,-8.041887 -0.364805,-11.869326 -4.765165,-11.756282 -4.400364,0.113044 -3.875,4.875 -3.875,4.875" />
      <path
            class="even" d="m 41.132922,72.334447 c 0,0 2.49775,-5.267079 3.181981,-8.883029 0.68423,-3.61595 0.353553,-9.413359 0.353553,-9.413359" />
      <path
            class="odd" d="m 45.161782,73.75 c 0,0 1.534894,-3.679847 2.40625,-6.53125 0.871356,-2.851403 1.28125,-7.15625 1.28125,-7.15625" />
      <path
            class="odd" d="m 48.801947,56.125 c 0,0 0.234502,-1.809418 0.109835,-3.375 -0.124667,-1.565582 -0.5625,-3.1875 -0.5625,-3.1875" />
    </g>
  </svg>
  <svg class="fingerprint fingerprint-active" xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="3 3 100 100">
    <g class="fingerprint-out" fill="none" stroke-width="2" stroke-linecap="round">
      <path
            class="odd" d="m 25.117139,57.142857 c 0,0 -1.968558,-7.660465 -0.643619,-13.149003 1.324939,-5.488538 4.659682,-8.994751 4.659682,-8.994751" />
      <path
            class="odd" d="m 31.925369,31.477584 c 0,0 2.153609,-2.934998 9.074971,-5.105078 6.921362,-2.17008 11.799844,-0.618718 11.799844,-0.618718" />
      <path
            class="odd" d="m 57.131213,26.814448 c 0,0 5.127709,1.731228 9.899495,7.513009 4.771786,5.781781 4.772971,12.109204 4.772971,12.109204" />
      <path
            class="odd" d="m 72.334009,50.76769 0.09597,2.298098 -0.09597,2.386485" />
      <path
            class="even" d="m 27.849282,62.75 c 0,0 1.286086,-1.279223 1.25,-4.25 -0.03609,-2.970777 -1.606117,-7.675266 -0.625,-12.75 0.981117,-5.074734 4.5,-9.5 4.5,-9.5" />
      <path
            class="even" d="m 36.224282,33.625 c 0,0 8.821171,-7.174484 19.3125,-2.8125 10.491329,4.361984 11.870558,14.952665 11.870558,14.952665" />
      <path
            class="even" d="m 68.349282,49.75 c 0,0 0.500124,3.82939 0.5625,5.8125 0.06238,1.98311 -0.1875,5.9375 -0.1875,5.9375" />
      <path
            class="odd" d="m 31.099282,65.625 c 0,0 1.764703,-4.224042 2,-7.375 0.235297,-3.150958 -1.943873,-9.276886 0.426777,-15.441942 2.370649,-6.165056 8.073223,-7.933058 8.073223,-7.933058" />
      <path
            class="odd" d="m 45.849282,33.625 c 0,0 12.805566,-1.968622 17,9.9375 4.194434,11.906122 1.125,24.0625 1.125,24.0625" />
      <path
            class="even" d="m 59.099282,70.25 c 0,0 0.870577,-2.956221 1.1875,-4.5625 0.316923,-1.606279 0.5625,-5.0625 0.5625,-5.0625" />
      <path
            class="even" d="m 60.901059,56.286612 c 0,0 0.903689,-9.415996 -3.801777,-14.849112 -3.03125,-3.5 -7.329245,-4.723939 -11.867187,-3.8125 -5.523438,1.109375 -7.570313,5.75 -7.570313,5.75" />
      <path
            class="even" d="m 34.072577,68.846248 c 0,0 2.274231,-4.165782 2.839205,-9.033748 0.443558,-3.821814 -0.49394,-5.649939 -0.714206,-8.05386 -0.220265,-2.403922 0.21421,-4.63364 0.21421,-4.63364" />
      <path
            class="odd" d="m 37.774165,70.831845 c 0,0 2.692139,-6.147592 3.223034,-11.251208 0.530895,-5.103616 -2.18372,-7.95562 -0.153491,-13.647655 2.030229,-5.692035 8.108442,-4.538898 8.108442,-4.538898" />
      <path
            class="odd" d="m 54.391174,71.715729 c 0,0 2.359472,-5.427681 2.519068,-16.175068 0.159595,-10.747388 -4.375223,-12.993087 -4.375223,-12.993087" />
      <path
            class="even" d="m 49.474282,73.625 c 0,0 3.730297,-8.451831 3.577665,-16.493718 -0.152632,-8.041887 -0.364805,-11.869326 -4.765165,-11.756282 -4.400364,0.113044 -3.875,4.875 -3.875,4.875" />
      <path
            class="even" d="m 41.132922,72.334447 c 0,0 2.49775,-5.267079 3.181981,-8.883029 0.68423,-3.61595 0.353553,-9.413359 0.353553,-9.413359" />
      <path
            class="odd" d="m 45.161782,73.75 c 0,0 1.534894,-3.679847 2.40625,-6.53125 0.871356,-2.851403 1.28125,-7.15625 1.28125,-7.15625" />
      <path
            class="odd" d="m 48.801947,56.125 c 0,0 0.234502,-1.809418 0.109835,-3.375 -0.124667,-1.565582 -0.5625,-3.1875 -0.5625,-3.1875" />
    </g>
  </svg>
</div>
	<div class="done">
		<div class="loading-container-child" id="tick">
	<svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 37 37"  xml:space="preserve">
<path class="circ path" style="fill:none;stroke:#1ECD97;stroke-width:1;stroke-linejoin:round;stroke-miterlimit:10;" d="
	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"
	/>
<polyline class="tick path" style="fill:none;stroke:#1ECD97;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" points="
	11.6,20 15.9,24.2 26.4,13.8 "/>
</svg>
</div>

<div class="loading-container-child" id="cross">

<svg version="1.1" id="cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
<path class="circ path" style="fill:none;stroke:#cd1e54;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" d="	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"
	/>
<line class="cross path" x1="12" y1="25" x2="25" y2="12" stroke-width="1" stroke="black" style="fill:none;stroke:#cd1e54;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;"/>
  <line class="cross path" x1="12" y1="12" x2="25" y2="25" style="fill:none;stroke:#cd1e54;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;"/>
</svg>
</div>

</div>
</div>
      <!-- END: Content-->

      </form>   
   </div>
                              </div>
                           </div>
                        
                           <div class="col-md-7 side-img">
                              <img class="img-fluid" src="illupng.png" alt="branding logo" >
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- register section endss -->
            </div>
         </div>
         <?}?>
      </div>
        <div id="message"></div>
      <div class="">
         <div class="card-group">
            <div class="card">
               <img class="card-img-top" src="R.V._College_of_Engineering_logo.png" alt="Card image cap" height="100px" width="100px">
               <div class="card-body">
                  <p class="card-text para">We're working to solve day to day communication, operational, learning and management issues through very much organised and effective solutions by providing many of the important features on Attendance management system which brings a lot of convenience and efficiency.</p>
               </div>
               <div class="card-footer">
               </div>
            </div>
            <div class="card">
            </div>
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Call us</h5>
                  <p class="card-text ">Call Us: 0123456789
                     (monday-sat)
                  </p>
                  <h5 class="card-title">Address</h5>
                  <p class="card-text"> ISE Attendance Manager
                  </p>
               </div>
               <div class="card-footer">
               </div>
            </div>
         </div>
      </div>
      <!-- Remove the container if you want to extend the Footer to full width. -->
      <div class="container-fluid bg-light">
         <footer class="text-center text-white">
            <!-- Grid container -->
            <div class="pb-0">
               <!-- Section: Social media -->
               <section class="mb-4">
                  <!-- Facebook -->
               </section>
               <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
            <!-- Copyright -->
            <div class="text-center p-3" >
               © 2021 Copyright:
               <a class="text-white" href="#"> ISE Attendance Manager</a>
            </div>
            <!-- Copyright -->
         </footer>
      </div>
      <!-- End of .container -->
      <!-- BEGIN: Vendor JS-->
      <script src="Admin/app-assets/vendors/js/vendors.min.js"></script>
      <script src="Admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
      <script src="Admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
      <script src="Admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
      <!-- BEGIN Vendor JS-->
      <!-- BEGIN: Page Vendor JS-->
      <!-- END: Page Vendor JS-->
      <!-- BEGIN: Theme JS-->
      <script src="Admin/app-assets/js/core/app-menu.min.js"></script>
      <script src="Admin/app-assets/js/core/app.min.js"></script>
      <script src="Admin/app-assets/js/scripts/components.min.js"></script>
      <script src="Admin/app-assets/js/scripts/footer.min.js"></script>
      <!-- END: Theme JS-->
      <!-- BEGIN: Page JS-->
      <!-- END: Page JS-->
      <script>
         function startTime() {
         var today = new Date();
         var hr = today.getHours();
         var min = today.getMinutes();
         var sec = today.getSeconds();
         ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
         hr = (hr == 0) ? 12 : hr;
         hr = (hr > 12) ? hr - 12 : hr;
         //Add a zero in front of numbers<10
         hr = checkTime(hr);
         min = checkTime(min);
         sec = checkTime(sec);
         document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
         
         var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
         var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
         var curWeekDay = days[today.getDay()];
         var curDay = today.getDate();
         var curMonth = months[today.getMonth()];
         var curYear = today.getFullYear();
         var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
         document.getElementById("date").innerHTML = date;
         
         var time = setTimeout(function(){ startTime() }, 500);
         }
         function checkTime(i) {
         if (i < 10) {
             i = "0" + i;
         }
         return i;
         }
      </script>
   </body>
</html>

<script type="text/javascript">
   $(document).ready(function(ajay)
   {
     $(document).on('click', '.loading-container', function(ajay) {   
   
    var id = $("#id").val();
     var type = $("#type").val();
      var time = $("#time").val();

  ajay. preventDefault();
   $.ajax({
   url:"php/timesheet.php",
   type:"POST",
   data:{
      id :id,
      type:type,
      time:time
   },
 
   contentType:false,
   cache:false,
   processData:false,
   success:function(data)
   {
   
   $("#message").html(data);
   }
   });
   });
   });
</script>


<script>
     $( ".loading-container" ).click(function() {
    $( ".spinner" ).removeClass("invisible", 250).addClass( "onclic", 250);
	 $( ".loader" ).addClass( "invisible", 250); 
	   $( ".processing" ).addClass( "active", 250); 
	  setTimeout(function(){
		   $( ".spinner" ).addClass( "invisible");} , 4400);
	  setTimeout(function(){
		  $('#tick').addClass("drawn");
	  }, 4900)
  });
</script>