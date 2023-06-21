<?php include'header.php';?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
<?if(!isset($_GET['edit'])){?>
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Student</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Forms</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Add Student</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-10 col-10 offset-1">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Student Form</h4>
        </div>
        <div class="card-body">
          <form class="form form-vertical" id="formData">
            <div class="form-body">
              <div class="row">
                

                <div class="col-12">
                  <div class="form-group">
                    <label for="first-name-vertical"> Name</label>
                    <input type="text"  class="form-control" name="name"
                      placeholder="Name" required id="name">
                  </div>
                </div>
               
                <div class="col-6">
                  <div class="form-group">
                    <label for="class-id-vertical">Class</label>
                      <select class="form-control" id="sel1">
                         <?php 

                
                            $sql = "SELECT *  FROM category";

                            $result=mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result)) {
                                
                           ?>
                      <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                    
                      <?php }?>
                   
                      </select>
                  </div>
                </div>
                
                  <div class="col-6">
                  <div class="form-group">
                    <label for="section-id-vertical">Section</label>
                    <input type="text" class="form-control" name="section"
                      placeholder="Section" required id="section">
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-group">
                    <label for="mobile-vertical">Mobile</label>
                    <input type="text"  class="form-control" name="mobile"
                      placeholder="Mobile" required  id="mobile">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="Email-vertical">Email</label>
                    <input type="email" class="form-control" name="email"
                      placeholder="Email" required id="email" id="email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="password-vertical">password</label>
                    <input type="password"  class="form-control" name="password"
                      placeholder="Password" required id="password">
                  </div>
                </div>

                
                
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-success btn-block mr-1">Submit</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
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
        url:"php/Student_management.php",
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
<?
}
else{
$SelectData = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `student` WHERE `id`='".$_GET['edit']."'"));
?>
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Student</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Forms</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Edit Student</a>
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
          <h4 class="card-title">Student Form</h4>
        </div>
        <div class="card-body">
          <form class="form form-vertical" id="formdesk">
            <div class="form-body">
              <div class="row">
                

                <div class="col-12">
                  <div class="form-group">
                    <label for="first-name-vertical"> Name</label>
                    <input type="text"  class="form-control" name="name"
                      placeholder="Name" required id="name" value="<?php echo $SelectData['name'] ?>">
                      <input type="hidden"  class="form-control" name="id"
                      placeholder="Name" required id="id" value="<?php echo $SelectData['id'] ?>">
                  </div>
                </div>
               
                <div class="col-6">
                  <div class="form-group">
                    <label for="email-id-vertical">Class</label>
                    <input type="text"  class="form-control" name="class"
                      placeholder="Class" required id="class" value="<?php echo $SelectData['class'] ?>">
                  </div>
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="section-id-vertical">Section</label>
                    <input type="text" class="form-control" name="section"
                      placeholder="Section" required id="section" value="<?php echo $SelectData['section'] ?>">
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-group">
                    <label for="mobile-vertical">Mobile</label>
                    <input type="text"  class="form-control" name="mobile"
                      placeholder="Mobile" required id="mobile" value="<?php echo $SelectData['mobile'] ?>">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="email-vertical">Email</label>
                    <input type="email" class="form-control" name="email"
                      placeholder="Email" required id="email"  value="<?php echo $SelectData['email'] ?>">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="password-vertical">password</label>
                    <input type="password"  class="form-control" name="password"
                      placeholder="Password" required id="password"  value="<?php echo $SelectData['password'] ?>">
                  </div>
                </div>

                
                
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-success btn-block mr-1">Submit</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
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
  $(document).ready(function(Ajay)
  {
    $("#formdesk").on('submit',function(Ajay)
    {
      Ajay.preventDefault();
      $.ajax({
        url:"php/Student_management.php",
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
<?}?>
