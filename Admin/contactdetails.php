<?php include'header.php';?>

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Class</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Forms</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#"> Contact</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Horizontal form layout section start -->

<!-- Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">


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
        <div class="card-header">
          <h4 class="card-title">Contact Form</h4>
        </div>
        <div class="card-body">
          <form action="" class="form form-vertical" id="dataGet">
            <div class="form-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
               
                    <label for="first-name-vertical"> Copyright</label>
                    <input type="text" id="copyright" class="form-control" name="copyright"
                      placeholder="Copyright" value="<?php echo $copyright;?>" >

                      <div class="form-group">
               
                    <label for="first-name-vertical"> Email</label>
                    <input type="text" id="email" class="form-control" name="email"
                      placeholder=" Email" value="<?php echo $email;?>" >
                  </div>
                  <div class="form-group">
               
                    <label for="first-name-vertical"> Facebook</label>
                    <input type="text" id="facebook" class="form-control" name="facebook"
                      placeholder=" facebook" value="<?php echo $facebook;?>" >
                  </div>
                  <div class="form-group">
               
                    <label for="first-name-vertical"> Twitter</label>
                    <input type="text" id="twitter" class="form-control" name="twitter"
                      placeholder=" twitter"  value="<?php echo $twitter;?>">
                  </div>
                  <div class="form-group">
               
                    <label for="first-name-vertical"> Instagram</label>
                    <input type="text" id="instagram" class="form-control" name="instagram"
                      placeholder=" instagram" value="<?php echo $instagram;?>" >
                  </div>
                  <div class="form-group">
               
                    <label for="first-name-vertical"> Linkedin</label>
                    <input type="text" id="linkedin" class="form-control" name="linkedin"
                      placeholder="linkedin" value="<?php echo $linkedin;?>" >
                  </div>
                  <div class="form-group">
               
                    <label for="first-name-vertical"> youtube</label>
                    <input type="text" id="youtube" class="form-control" name="youtube"
                      placeholder=" youtube" value="<?php echo $youtube;?>" >
                  </div>
                 

                  </div>
                </div>
               
                <div class="col-12 d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <button type="reset" class="btn btn-light-secondary">Reset</button>
                </div>
                
              </div>
            </div>
          </form>
          <div id="message"></div>
        </div>
      </div>
    </div>
  
  </div>
</section>


        </div>
      </div>
    </div>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>  -->
    <!-- END: Content-->
 <?php include'footer.php';?>
 <script type="text/javascript">
    $(document).ready(function(nitesh)
    {
      //alert('nites');
      $("#dataGet").on('submit',function(nitesh)
      {
        //alert('nites');
        nitesh.preventDefault();
        $.ajax({
          url:"php/contactdetails.php",
          type:"post",
          data:$('form').serialize(),
          success:function (data)
          {
            $("#message").html(data);
          }
        });
      });
      
    });
  </script>
