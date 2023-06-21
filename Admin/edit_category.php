<?php include'header.php';
if (isset($_GET['edit'])) {
  $DataEdit = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `category` WHERE `id`='".$_GET['edit']."'"));

  $Detail = "Edit ";
}
?>
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
                  <li class="breadcrumb-item active"><a href="#"> class</a>
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
          <h4 class="card-title"><?php if(isset($Detail)){ echo $Detail ; } else { echo "Add ";}?>Class Form</h4>
        </div>
        <div class="card-body">
          <form action="" class="form form-vertical" id="dataGet">
            <div class="form-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php  echo $DataEdit['id'] ; ?>">
                    <label for="first-name-vertical"> Name</label>
                    <input type="text" id="first-name-vertical" class="form-control" name="name"
                      placeholder=" Name" value="<?php if(isset($DataEdit)){ echo $DataEdit['name'] ; } ?>">
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
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script> --> 
    <!-- END: Content-->

<?php include'footer.php';?>
 <script type="text/javascript">
    $(document).ready(function(nitesh)
    {
      //alert('nites');
      $("#dataGet").on('submit',function(nitesh)
      {
        nitesh.preventDefault();
        //alert('nites');
        $.ajax({
          url:"php/edit_class.php",
          type:"post",
          data:$('form').serialize(),
          success:function (data)
          {
            $("#message").html(data);
          }
        })
      });
      
    });
  </script>