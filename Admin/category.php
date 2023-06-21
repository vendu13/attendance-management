<?php include('header.php');

  
  $SelectData = mysqli_query($conn,"SELECT * FROM `category` ORDER BY id DESC");

  if (isset($_GET['delete'])) {
    $DeletData = mysqli_query($conn,"DELETE FROM  `category` WHERE `id`='".$_GET['delete']."'");
    echo '<script>alert("Deleted SuccessFully..")
    window.location="?"
    </script>';
  }

?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">All Classes</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Class
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
                  <!-- <th>Email</th>
                  <th>Status</th> -->
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
                <td><?php echo $DataFetch['name'];?></td>
           
                
                <td>
                  <a href="edit_class.php?edit=<?php echo $DataFetch['id'];?>" class="btn btn-primary">Edit</a>
                  <a onclick="return confirm('Are You Sure')" href="?delete=<?php echo $DataFetch['id'];?>" class="btn btn-danger">Delete</a>
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
                  <!-- <th>Email</th>
                  <th>Status</th> -->
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
<!--/ Zero configuration table -->
<!-- Row grouping -->

<!-- Row grouping -->

<!-- Complex headers table -->

<!--/ Complex headers table -->

<!-- Add rows table -->

<!--/ Add rows table -->

<!-- Column selectors with Export Options and print table -->

<!-- Column selectors with Export Options and print table -->

<!-- Scroll - horizontal and vertical table -->

<!--/ Scroll - horizontal and vertical table -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

<?php include'footer.php';?>