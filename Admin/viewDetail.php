<?include('header.php');
$id = base64_decode($_GET['id']);
$DataGet = mysqli_fetch_assoc(mysqli_query($conn,"SELECT *  FROM student left join `timesheet` ON student.id=timesheet.userID WHERE timesheet.userID=$id or student.id=$id "));
?>

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- users view start -->
<section class="users-view "  >
  <!-- users view media object start -->
  <div class="row">
    <div class="col-12 col-sm-7">
      <div class="media mb-2">
        <a class="mr-1" href="javascript:void(0);">
          <img src="https://rvce.edu.in/sites/default/files/logo_0.png" alt="users view avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
        </a>
        <div class="media-body pt-25">
          <h4 class="media-heading"><span class="users-view-name"><?=$DataGet['name']?> </span><span
              class="text-muted font-medium-1"> @</span><span
              class="users-view-username text-muted font-medium-1 "><?=$DataGet['email']?></span></h4>
          <span>ID:</span>
          <span class="users-view-id"><?=$DataGet['id']?></span>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
      <!-- <a href="javascript:void(0);" class="btn btn-sm mr-25 border"><i class="bx bx-envelope font-small-3"></i></a> -->
     <!--  <a href="javascript:void(0);" class="btn btn-sm mr-25 border">Profile</a>
      <a href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/app-users-edit.html" class="btn btn-sm btn-primary">Edit</a> -->
    </div>
  </div>
  <!-- users view media object ends -->
  <!-- users view card data start -->
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12">
          <table class="table table-borderless dataex-html5-selectors">

              <thead>
              	
                <tr>
                
                  <th width="40%">Title</th>
                  <th width="60%">Description</th>
                 
                  
                  
                </tr>
               
              </thead>
              <tbody>
              <tr>
                <td>Name:</td>
                <td><?=$DataGet['name']?></td>
              </tr>
              <tr>
                <td>mobile:</td>
               <td><?=$DataGet['mobile']?></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td class="users-view-verified"><?=$DataGet['email']?></td>
              </tr>
              
          
            </tbody>
          </table>
        </div>
       
      </div>
    </div>
  </div>

  <!-- users view card data ends -->
  <!-- users view card details start -->
  <div class="card">
    <div class="card-body">
      <div class="row bg-primary bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
       
      </div>
      <div class="col-12">
      	<h3>Student    Timesheet</h3>
      	<div class="table-responsive">
            <table class="table table-striped dataex-html5-selectors">

              <thead>
              	
                <tr>
                
                  <th>Sr.No</th>
                  <th>Student Name</th>
                  <th>Date</th>
                  <th>time</th>
            
                </tr>
               
              </thead>
              <tbody>
              	
                <?php
                $SelectData =mysqli_query($conn,"SELECT * FROM `timesheet` join student ON student.id=timesheet.userID WHERE timesheet.userID=$id ORDER BY timesheet.id DESC");
                $number = 1;
                while($DataFetch = mysqli_fetch_assoc($SelectData))
                {
                ?>
                <tr>
                  
                  <td><?=$number++; ?></td>
                  <td><?=$DataFetch['name'];?></td>
                  <td><?=$DataFetch['start_time'];?></td>
                    <td><?=$DataFetch['tim_time'];?></td>
               
                  
                </tr>
                
                <?}?>
               
    
            
               
              </tbody>
         
            </table>
          </div> 

        </div>
      </div>
    </div>

    <!-- END: Content-->
<?include('footer.php')?>


