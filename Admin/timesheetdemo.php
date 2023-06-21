<?include('header.php');


$SelectData = mysqli_query($conn,"SELECT timesheet.*,user.name as UserName FROM `timesheet` JOIN user ON timesheet.userID=user.id WHERE order by timesheet.id DESC");
?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Timesheet</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Timesheet
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><div class="row">
 
</div>

<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            All User Timesheet Management
          </h4>
        </div>
        <div class="card-body card-dashboard">
         
          <div class="table-responsive">
            <table class="table table-striped dataex-html5-selectors">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <!-- <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th> -->
                </tr>
              </thead>
              <tbody>
                
                <?
                while($FetchData=mysqli_fetch_assoc($SelectData))
                {
                ?>
                <tr>
                  <td><?=$FetchData['userName']?></td>
                  <td><?=$FetchData['date']?></td>
                  
                </tr>
                <?}
                else

                  {?>

                <tr>
                  <span>No Data Found</span>
                </tr>
                <?}?>
             
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <!-- <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th> -->
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
<?include('footer.php')?>