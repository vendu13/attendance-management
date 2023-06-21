<?php include('header.php');

  $Detail="User";
  $SelectData = mysqli_query($conn,"SELECT * FROM `student` ORDER BY id DESC");

if (isset($_GET['delete'])) {
  $DeleteData = mysqli_query($conn,"DELETE FROM `student` WHERE `id`='".$_GET['delete']."'");
  if ($DeleteData) {
    echo '<script> alert("Deleted SuccessFully.."); window.location="?";</script>';
  }

}

?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">All Student</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Student
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><div class="row">
  <div class="col-12">
   <!--  <p>
      Read full documnetation
      <a href="https://datatables.net/" target="_blank">here</a>
    </p> -->
  </div>
</div>
<!-- Zero configuration table -->
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">All Data</h4>
        </div>
        <div class="card-body card-dashboard">
          <!-- <p class="card-text">
            DataTables has most features enabled by default, so all you need
            to do to use it with your own tables is to call the construction
            function: $().DataTable();.
          </p> -->
          <div class="table-responsive">
            <table class="table zero-configuration">
              <thead>
                <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>

                    <th>Class</th>
                    <th>Section</th>
                    <th>Password</th>
                    <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
              $number = 1;
              while($DataFetch = mysqli_fetch_assoc($SelectData))
              {
              ?>
              <tr>
                <td><?php echo $number++; ?></td>
                <td>
                  <a href="viewDetail.php?id=<?=base64_encode($DataFetch['id'])?>"><?=$DataFetch['name'];?></a>
                </td>
                <td><?php echo $DataFetch['email'];?></td>
                   <td><?php echo $DataFetch['mobile'];?></td>
               
                  <td><?php echo $DataFetch['class'];?></td>
                   <td><?php echo $DataFetch['section'];?></td>
                 <td><?php echo $DataFetch['password'];?></td>
                <!-- <td><?php echo $DataFetch['added_on'];?></td> -->
                <td>
                  <!-- <a  href="vendor_detail.php?view=<?php echo $DataFetch['id'];?>" class="btn btn-warning"><i class="bx bx-show-alt"></i></a> -->
                  <a href="user_management.php?edit=<?php echo $DataFetch['id'];?>" class="btn btn-primary"><i class="bx bxs-edit"></i></a>
                  <a onclick="return confirm('Are You Sure..')" href="?delete=<?php echo $DataFetch['id'];?>" class="btn btn-danger"><i class="bx bxs-trash-alt"></i></a>
                </td>

              </tr>
              <?php
              }
              ?>
               
              </tbody>
              <tfoot>
                <tr>
                  <th>Sr</th>
                  <th>Name</th>
                  <th>Email</th>
                
                  <th>Action</th>
                  
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


        </div>
      </div>
    </div>
    <!-- END: Content-->

<?php include'footer.php';?>