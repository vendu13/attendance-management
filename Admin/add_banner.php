<?php include'header.php';

?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Banner</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Forms</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Add Banner</a>
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
        <div class="card-header">
          <h4 class="card-title">Add Banner Form</h4>
        </div>
        <div class="card-body">
          <form  class="form form-vertical" id="dataGet"  enctype="multipart/form-data">
            <div class="form-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php if(isset($DataEdit)){ echo $DataEdit['id'] ; } ?>">
                    <label for="first-name-vertical"> Title</label>
                    <input type="text" id="first-name-vertical" class="form-control" name="name"
                      placeholder=" Name" >
                  </div>
                </div>
               <div class="col-12">
                  <div class="form-group">
                  
                    <label for="first-name-vertical"> Image</label>
                    <input type="file" id="first-name-vertical" class="form-control"         name="image" placeholder=" Name" >
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
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
<?php include'footer.php';?>
<script type="text/javascript">
$(document).ready(function(ddds){
$("#dataGet").on('submit',(function(ddds){
ddds.preventDefault();

$.ajax({
url:"php/add_banner.php",
type:"POST",
data:new FormData(this),
contentType:false,
cache:false,
processData:false,
success:function(data){

$("#message").html(data)
},
error:function(){}

});
}));
});
</script>


<!-- <script>
  $(document).ready(function(abcabn) {
        $("#dataGet").on('submit', (function(abcabn) {
          alert('hello');
            abcabn.preventDefault();
            $.ajax({
                url: "php/add_banner.php",
                type: "POST",
                data: new FormData(this),
                success: function(data) {
                  alert(data);
                    $("#message").html(data);
                },
                error: function() {}
            });
        }));
    });
</script> -->





 <!-- <script type="text/javascript">
    $(document).ready(function(nitesh)
    {
      //alert('nites');
      $("#dataGet").on('submit',function(nitesh)
      {
       nitesh.preventDefault(); 
        $.ajax({
          url:"php/add_banner.php",
          type:"post",
          data:new formData(this),
          success:function (data)
          {
            $("#message").html(data);
          }
        })
      });
      
    });
  </script> -->
