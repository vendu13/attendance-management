<?php include 'header.php';
$name="nire";
if (isset($_GET['view'])) {
  $DataGet = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * , signup.image as pimage FROM `signup` INNER JOIN `vendor_detail` ON signup.id=vendor_detail.vendorID WHERE signup.id='".$_GET['view']."'"));
  
}
else
{
  echo '<script>window.location="index.php"</script>';
}
?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- users view start -->
<section class="users-view">
  <!-- users view media object start -->
  <div class="row">
    <div class="col-12 col-sm-7">
      <div class="media mb-2">
        <a class="mr-1" href="javascript:void(0);">
          <img src="../impimage/<?php echo $DataGet['pimage']?>" alt="users view avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
        </a>
        <div class="media-body pt-25">
          <h4 class="media-heading"><span class="users-view-name"><?php echo $DataGet['name'];?> </span><span
              class="text-muted font-medium-1"> @</span><span
              class="users-view-username text-muted font-medium-1 "><?php echo $DataGet['email']?></span></h4>
         <!--  <span>ID:</span>
          <span class="users-view-id">305</span> -->
        </div>
      </div>
    </div>
   <!--  <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
      <a href="javascript:void(0);" class="btn btn-sm mr-25 border"><i class="bx bx-envelope font-small-3"></i></a>
      <a href="javascript:void(0);" class="btn btn-sm mr-25 border">Profile</a>
      <a href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/app-users-edit.html" class="btn btn-sm btn-primary">Edit</a>
    </div> -->
  </div>
  <!-- users view media object ends -->
  <!-- users view card data start -->
  <!-- <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-4">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Registered:</td>
                <td>01/01/2019</td>
              </tr>
              <tr>
                <td>Latest Activity:</td>
                <td class="users-view-latest-activity">30/04/2019</td>
              </tr>
              <tr>
                <td>Verified:</td>
                <td class="users-view-verified">Yes</td>
              </tr>
              <tr>
                <td>Role:</td>
                <td class="users-view-role">Staff</td>
              </tr>
              <tr>
                <td>Status:</td>
                <td><span class="badge badge-light-success users-view-status">Active</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-md-8">
          <div class="table-responsive">
            <table class="table mb-0">
              <thead>
                <tr>
                  <th>Module Permission</th>
                  <th>Read</th>
                  <th>Write</th>
                  <th>Create</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Users</td>
                  <td>Yes</td>
                  <td>No</td>
                  <td>No</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Articles</td>
                  <td>No</td>
                  <td>Yes</td>
                  <td>No</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Staff</td>
                  <td>Yes</td>
                  <td>Yes</td>
                  <td>No</td>
                  <td>No</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- users view card data ends -->
  <!-- users view card details start -->
  <div class="card">
    <div class="card-body">
      <div class="row bg-primary bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
        <div class="col-12 col-sm-12 p-2">
          <h6 class="text-primary mb-0">Shop Name: <span class="font-large-1 align-middle"><?php echo $DataGet['shop_name']; ?></span></h6>
        </div>
        <!-- <div class="col-12 col-sm-4 p-2">
          <h6 class="text-primary mb-0">Followers: <span class="font-large-1 align-middle">534</span></h6>
        </div>
        <div class="col-12 col-sm-4 p-2">
          <h6 class="text-primary mb-0">Following: <span class="font-large-1 align-middle">256</span></h6>
        </div> -->
      </div>
      <div class="col-12">
        <table class="table table-borderless">
          <tbody>
             <tr>
              <td>Shop Name:</td>
              <td><?php echo $DataGet['shop_name']; ?></td>
            </tr>
            <tr>
              <td>Shop Type:</td>
              <td><?php
              if ($DataGet['shop_type']==1) {
                echo "Tailor";
              }
              elseif ($DataGet['shop_type']==2) {
                echo "Boutique";
              }
              elseif ($DataGet['shop_type']==3) {
                echo "Loundary";
              }

              ?></td>
            </tr>
             <tr>
              <td>Expert:</td>
              <td><?php echo $DataGet['expert']; ?></td>
            </tr>
            <tr>
              <td>Experience:</td>
              <td><?php echo $DataGet['experience']; ?></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><?php echo $DataGet['address']; ?></td>
            </tr>

          </tbody>
        </table>
        <!-- <h5 class="mb-1"><i class="bx bx-link"></i> Social Links</h5> -->
<!--         <table class="table table-borderless">
          <tbody>
            <tr>
              <td>Twitter:</td>
              <td><a href="javascript:void(0);">https://www.twitter.com/</a></td>
            </tr>
            <tr>
              <td>Facebook:</td>
              <td><a href="javascript:void(0);">https://www.facebook.com/</a></td>
            </tr>
            <tr>
              <td>Instagram:</td>
              <td><a href="javascript:void(0);">https://www.instagram.com/</a></td>
            </tr>
          </tbody>
        </table> -->
        <h5 class="mb-1"><i class="bx bx-info-circle"></i> Personal Info</h5>
        <table class="table table-borderless mb-0">
          <tbody>
            <tr>
              <td>Username:</td>
              <td class="users-view-username"><?php echo $DataGet['user_name']; ?></td>
            </tr>
            <tr>
              <td>Name:</td>
              <td class="users-view-name"><?php echo $DataGet['name']; ?></td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td class="users-view-email"><?php echo $DataGet['email']; ?></td>
            </tr>
           <!--  <tr>
              <td>Birthday:</td>
              <td>03/04/1990</td>
            </tr>
            <tr>
              <td>Country:</td>
              <td>USA</td>
            </tr>
            <tr>
              <td>Languages:</td>
              <td>English</td>
            </tr> -->
            <tr>
              <td>Contact:</td>
              <td><?php echo $DataGet['mobile']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- users view card details ends -->

</section>
<!-- users view ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
<?php include'footer.php';?>