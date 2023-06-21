<?php include'header.php';
$id=$_SESSION['loginadmin'];
$SelectData = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `admin` WHERE `id` = $id" ));

?>
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Admin</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Forms</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Edit Admin Profile</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Admin Profile</h4>
        </div>
        <div class="card-body">
          <form class="form form-vertical" id="formData">
            <div class="form-body">
              <div class="row">
                

                <div class="col-12">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?=$SelectData['id']?>">
                    <label for="first-name-vertical">Admin Name</label>
                    <input type="text" id="first-name-vertical" class="form-control" name="name"
                      placeholder="Name" value="<?=$SelectData['name']?>">
                  </div>
                </div>
               
                <div class="col-12">
                  <div class="form-group">
                    <label for="email-id-vertical">Admin Email</label>
                    <input type="email" id="email-id-vertical" class="form-control" name="email"
                      placeholder="Email" required="" value="<?=$SelectData['email']?>">
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-group">
                    <label for="password-vertical">Password</label>
                    <input type="password" id="password-vertical" class="form-control" name="password"
                      placeholder="Password" required=" " value="<?=$SelectData['password']?>">
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
  $(document).ready(function(nitesh)
  {
    $("#formData").on('submit',function(nitesh)
    {
      nitesh.preventDefault();
      $.ajax({
        url:"php/edit_profile.php",
        type:"POST",
        data:new FormData(this),
        contentType:false,
        cache:false,
        processData:false,
        success:function(data)
        {
          $("#message").html(data);
        },
        error:function(){}
      });
    });
  });
</script>

