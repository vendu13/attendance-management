<?php include('header.php'); ?>
<style type="text/css">
		.btn-secondary .ad {
		    color: #fff;
		    padding: 25
		px
		;
		    background-color: #13216a;
		    border-color: #6c757d;
		    font-size: 25px;
		    font-weight: 500;
		    margin: 15
		px
		;
		    border-radius: 30
		px
		;
		}
		
</style>
        <section id="ei-newslatter" class="ei-newslatter-section position-relative">
            <div class="ei-newslatter-box position-relative">
                <div class="container">
                    <div class="row text-center">
                    	<!--Afte Log in User Show Data-->
                        
                       


                        
                       
                        <div class="col-md-12">
                         
					             <section id="ei-newslatter" class="ei-newslatter-section position-relative">
					            <div class="ei-newslatter-box position-relative">
					                <div class="container">
					                    <div class="row">
					                        <div class="col-md-6">
					                            <div class="ei-newslatter-contnet appeight-headline pera-content">
					                                <h3> ISE Attendance  <br> Manager

</h3>
					                                
					                              
					                                </div>
					                            </div>
					                             <div class="col-md-6">
					                            <div class="ei-newslatter-contnet appeight-headline pera-content">
					                               <img src="illupng.png" alt="hkgfhfgh" width="100%">
					                                
					                              
					                                </div>
					                            </div>
					                            <hr>
					                        </div>
					                    </div>
					                </div>
					                <div class="ei-news-vector1 position-absolute"><img src="assets/img/app-landing/shape/n-shape1.png" alt=""></div>
					                <div class="ei-news-vector2 position-absolute"><img src="assets/img/app-landing/shape/n-shape2.png" alt=""></div>
					                <div class="ei-news-vector3 position-absolute" data-parallax='{"x" : 50}'><img src="assets/img/app-landing/shape/n-shape3.png" alt=""></div>
					            </div>
					            <div class="ei-newslatter-mockup">
					                <img src="assets/img/app-landing/mockup/n-mockup.png" alt="">
					            </div>
					        </section>
                        </div>
                       
                    </div>
                </div>
                
            </div>
           
        </section>
    
 <?include('footer.php');?>  

						<script type="text/javascript">
                        	$(document).ready(function(nitesh)
                        	{
                        		$("#GetData").on('submit',function(nitesh)
                        		{
                        			//alert('nk');
                        			nitesh.preventDefault();
                        			$.ajax({
                        				url:"php/timesheet.php",
                        				type:"POST",
                        				data:new FormData(this),
                        				contentType:false,
                        				cache:false,
                        				processData:false,
                        				success:function(data)
                        				{
                        					//alert(data);
                        					$("#message").html(data);
                        				}
                        			});

                        		});
                        	});
                        </script>