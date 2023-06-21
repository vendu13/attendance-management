     <section id="ei-footer" class="ei-footer-section position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ei-footer-widget pera-content appeight-headline">
                            <div class="ei-footer-logo">
                                
                                <img src="R.V._College_of_Engineering_logo.png" alt="" class="logo">
                            </div>
                            <p>
                            An attendance management system is software that tracks the working hours of students and teachers. It does precise time tracking for attendance, breaks, the time off taken, clock in and clock out, by your students and teachers. It prevents any type of error in a record. It makes your attendance management precise and efficient.
                            </p>
                            <div class="ei-payment-mathod">
                                <img src="assets/img/app-landing/logo/paypal.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ei-footer-widget appeight-headline ul-li-block">
                            <h3 class="ei-widget-title">Useful link:</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Servce</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>

                     <?php



$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

          $copyright=$row["copyright"];
          $email= $row["email"];
          $facebook= $row["facebook"];
          $twitter=$row["twitter"];
          $instagram= $row["instagram"];
           $linkedin=$row["linkedin"];
           $youtube=$row["youtube"];



  }
} else {
  echo "0 results";
}
$conn->close();
?>

                    <div class="col-lg-4">
                        <div class="ei-footer-widget appeight-headline  ul-li-block">
                            <h3 class="ei-widget-title">Contact:</h3>
                            <h4>
                                <i class="fas fa-phone"></i>
                                Call Us: 0123456789
                                <span>( monday to saturday)</span>
                            </h4>
                           
                            <h4>
                                <i class="fas fa-envelope"></i>
                              Email:<?php echo $facebook ?>
                               
                            </h4>
                            <h4>
                               <i class="fas fa-map-marker-alt"></i>
                                 Fredtunkroken 74050 SOLA
                                <span> ISE Attendance Manager</span>
                            </h4>




                            <div class="download-btn">
                                <a href="#"><img src="assets/img/app-landing/logo/app1.png" alt=""></a>
                                <a href="#"><img src="assets/img/app-landing/logo/gp1.png" alt=""></a>
                            </div>
                            <div class="ei-footer-social">
                                <a href="<?php echo $facebook ?>"><i class="fab fa-facebook-f "></i></a>
                                <a href="<?php echo $twitter ?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo $instagram ?>"><i class="fab fa-instagram"></i></a>
                                <a href="<?php echo $linkedin ?>"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ei-footer-copyright">
                <div class="container">
                    <div class="ei-footer-copyright-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ei-copyright-text">
                                    <p>© 2021 <a href="#"> ISE Attendance Manager</a></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="ei-copyright-menu">
                                    <a href="#">Help</a>
                                    <a href="#">Terms & Conditions </a>
                                    <a href="#">Privacy </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ei-footer-shape1 position-absolute" data-parallax='{"x" : 60}'><img src="assets/img/app-landing/shape/fo-shape1.png" alt=""></div>
            <div class="ei-footer-shape2 position-absolute" data-parallax='{"y" : 60}'><img src="assets/img/app-landing/shape/fo-shape2.png" alt=""></div>
            <div class="ei-footer-shape3 position-absolute"><img src="assets/img/app-landing/shape/eimap.png" alt=""></div>
        </section>
   

        <!-- JS library -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/appear.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/pagenav.js"></script>
        <script src="assets/js/odometer.js"></script>
        <script src="assets/js/bxslider.js"></script>
        <script src="assets/js/jquery.barfiller.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/parallax-scroll.js"></script>
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/typer-new.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
    

</html>